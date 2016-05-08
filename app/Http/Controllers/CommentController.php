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
use App\Models\Comment;
use App\Models\Message;

class CommentController extends Controller
{

    public function index(){

    }

    public function show($id){

    }

    /**
     * @param user_id
     * @param book_id;
     * @param content
     */
    public function store(Request $request){
        $param=$request->all();
        $comment=Comment::create($param);
        if($comment){
            $book=Book::find($param['book_id']);
            $this->message($param['user_id'],$book->user_id,$param['content']);
            return $this->json_success('评论成功');
        }else return $this->json_error('失败',2000);
    }

    public function destroy(){

    }

    protected function message($user_id,$to_user_id,$content){
        $obj=new Message();
        $obj->user_id=$user_id;
        $obj->to_user_id=$to_user_id;
        $obj->content=$content;
        if($obj->save()){
            return true;
        }else{
            return false;
        }
    }
    public function reply(Request $request){
        $user_id=$request->input('user_id');
        $to_user_id=$request->input('to_user_id');
        $content=$request->input('content');
        if($this->message($user_id,$to_user_id,$content)){
            return $this->json_success('回复成功');
        }else return $this->json_sys_error();
    }
}
