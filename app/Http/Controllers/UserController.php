<?php
/**
 * Created by PhpStorm.
 * User: KEL
 * Date: 2016/5/7
 * Time: 20:48
 */

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(){

        return view('home.index');
    }

    /**
     * @param email
     * @return password
     *
     * 登录
     */
    public function postLogin(Request $request){
        $email = $request->input('email');//获取表单中email
        $password = $request->input('password');//获取表单中密码
        $u = User::where('email', $email)->first();//查找email用户
        if ($u) {
            if (Hash::check($password, $u->password)) {//Hash加密比较密码是否正确
                session(['user' => $u->toArray()]);//user存session
            } else {
                return $this->json(0, '密码错误');//返回错误
            }
        } else {
            return $this->json(0, '用户不存在');//返回错误
        }
    }

    /**
     * 退出
     */
    public function getLogout()
    {
        Session::clear();//销毁session
        return redirect('/login');//重定向到首页
    }

    /**
     * @param email
     * @param name
     * @param password
     * 注册
     */
    public function postRegister(Request $request)
    {

        $email = $request->input('email');
        $name = $request->input('name');
        $password=$request->input('password');

        DB::beginTransaction();//开始事物
        $u = User::where('email', $email)->first();//找到当前email有没有被占用
        if ($u) {
            return $this->json(0, 'email重复', 1000);//返回错误
        } else {
            $params['name'] = $name;
            $params['password'] = bcrypt($password);
            $params['email'] = $email;
            $u = User::create($params);//创建新用户
            if ($u) {
                DB::commit();//事物提交
                //自动登录
                session(['user' => $u->toArray()]);//session中存放新用户信息
                return $this->json(1, $u->id);//返回成功
            } else {
                DB::rollback();//事物回滚
                return $this->json(0, '系统错误', 3000);//返回错误
            }
        }
    }
}