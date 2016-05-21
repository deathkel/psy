<?php
/**
 * Created by PhpStorm.
 * User: KEL
 * Date: 2016/5/20
 * Time: 16:15
 */

namespace App\Http\Controllers;


use App\Models\Book;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function home(){
        //推荐3
        $command=Book::take(3)->get();
        //用户原创5
        $original=Book::where('type','original')->take(5)->get();
        $east=Book::where('type','east')->take(5)->get();
        $west=Book::where('type','west')->take(5)->get();
        $future=Book::where('type','future')->take(5)->get();
        $originalList=Book::where('type','original')->orderBy('view','desc')->take(5)->get();
        $classicsList=Book::orderBy('view','desc')->take(5)->get();
        $goodList=Book::orderBy('view','desc')->take(5)->get();

        return view('home.home',['command'=>$command,'original'=>$original,
            'east'=>$east,'west'=>$west,'future'=>$future,'originalList'=>$originalList,
            'classicsList'=>$classicsList,'goodList'=>$goodList]);
    }
    public function dongfang(){
        $command=Book::take(3)->get();
        $new=Book::where('type','east')->orderBy('id','desc')->take(15)->get();
        $score=Book::where('type','east')->orderBy('view','desc')->take(15)->get();
        $view=Book::where('type','east')->orderBy('view','desc')->take(15)->get();
        return view('home.dongfang',['command'=>$command,'new'=>$new,'score'=>$score,'view'=>$view]);
    }

    public function weilai(){
        $command=Book::take(3)->get();
        $new=Book::where('type','future')->orderBy('id','desc')->take(15)->get();
        $score=Book::where('type','future')->orderBy('view','desc')->take(15)->get();
        $view=Book::where('type','future')->orderBy('view','desc')->take(15)->get();
        return view('home.weilai',['command'=>$command,'new'=>$new,'score'=>$score,'view'=>$view]);
    }
    public function xifang(){
        $command=Book::take(3)->get();
        $new=Book::where('type','west')->orderBy('id','desc')->take(15)->get();
        $score=Book::where('type','west')->orderBy('view','desc')->take(15)->get();
        $view=Book::where('type','west')->orderBy('view','desc')->take(15)->get();
        return view('home.xifang',['command'=>$command,'new'=>$new,'score'=>$score,'view'=>$view]);
    }
    public function yuanchuang(){
        $command=Book::take(3)->get();
        $new=Book::where('type','original')->orderBy('id','desc')->take(15)->get();
        $score=Book::where('type','original')->orderBy('view','desc')->take(15)->get();
        $view=Book::where('type','original')->orderBy('view','desc')->take(15)->get();
        return view('home.yuanchuang',['command'=>$command,'new'=>$new,'score'=>$score,'view'=>$view]);
    }
    public function personal(){
        return view('home.personal');
    }
    public function read(){
        return view('home.read');
    }
    public function search(){
        return view('home.search');
    }
    public function upload(){
        return view('home.upload');
    }
    public function mynovel(){
        return view('home.weilai');
    }
    public function notice(){
        return view('home.notice');
    }
    public function setting(){
        return view('home.4_setting');
    }
    public function xieyi(){
        return view('home.4_xieyi');
    }
}
