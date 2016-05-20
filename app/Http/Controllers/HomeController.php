<?php
/**
 * Created by PhpStorm.
 * User: KEL
 * Date: 2016/5/20
 * Time: 16:15
 */

namespace App\Http\Controllers;


class HomeController
{
    public function index(){
        return view('home.index');
    }
}