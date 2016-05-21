<?php
/**
 * Created by PhpStorm.
 * User: KEL
 * Date: 2016/5/8
 * Time: 1:14
 */

namespace App\Http\Controllers;


use App\Http\Requests\Request;
use App\Models\Book;
use App\Models\Star;
use Illuminate\Http\Response;

class BookController extends Controller
{

    public function create(Request $request){

    }
    public function index(Request $request){
        //搜索
        if($search=$request->input('search')){
            $obj=Book::whereHas('user',function($query)use($search){
                    $query->where('name','like',$search);
                })
                ->orWhere('name','like',$search)
                ->get();
        }else{
            $orderBy=$request->input('orderBy');
            if($orderBy=='time'){
                $obj=Book::orderBy('created_at','desc')->paginate(8);
            }elseif($orderBy=='view'){
                $obj=Book::orderBy('view','desc')->paginate(8);
            }elseif($orderBy=='star'){
                $obj=Book::whereHas('star',function($query){
                    $query->orderBy('sum(star.star)','desc');
                })->paginate(8);
            }
        }
        return $this->json_success($obj->toArray());
    }

    public function show($id){

    }

    public function store(Request $request){
        $param=$request->all();
        $comment=Book::create($param);
        if($comment){
            return $this->json_success('上传成功');
        }else return $this->json_error('失败',2000);
    }

    public function destroy(){

    }

    public function download($id){
        $book=Book::find($id);
        $temp = tmpfile();//新建临时文件
        fwrite($temp, $book->content);//讲book内容写入临时文件
        fseek($temp, 0);
        $headers = array(
            'Content-Type: application/octet-stream',
        );
        return Response::download($temp, 'filename.pdf', $headers);
    }

    public function addView($id){
        $book=Book::find($id);
        $book->view+=1;
        if($book->save()){
            return $this->json_success('浏览量+1');
        }else return $this->json_sys_error();
    }

    public function star(Request $request,$book_id){
        $book=Book::find($book_id);
        if(!$book)return $this->json_error('书不存在',4004);
        $user_id=$request->input('user_id');
        $star=$request->input('star');
        $obj=Star::where(['book_id'=>$book_id,'user_id'=>$user_id]);
        if($obj)return $this->json_error('您已经评分过了',1000);
        $new_star=new Star();
        $new_star->book_id=$book_id;
        $new_star->user_id=$user_id;
        $new_star->star=$star;
        if($new_star->save()){
            return $this->json_success('评分成功');
        }else return $this->json_sys_error();
    }
}
