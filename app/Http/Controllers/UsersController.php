<?php

namespace App\Http\Controllers;
use App\Task;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories;
use App\Repositories\TaskRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    //
    protected $layout = "layouts.app";
    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->beforeFilter('auth', array('only'=>array('getIndex')));
    }
    public function getRegister() {
        return view('auth.register');
    }
    public function postCreate(request $request) {
        $validator = Validator::make($request->all(), User::$rules);

        if ($validator->passes()) {
            $user = new User;//实例化User对象
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = Hash::make($request['password']);
            $user->save();
            return Redirect::to('auth/login')->with('message', '欢迎注册，好好玩耍!');
        } else {
            return Redirect::to('auth/register')->with('message', '请您正确填写下列数据')->withErrors($validator)->withInput();
        }
    }
    public function getLogin() {
        return view('auth.login');
    }
    public function postSignin(request $request) {
        if (Auth::attempt(['name'=>$request['name'], 'password'=>$request['password']])) {
            return Redirect::to('index')->with('message', '欢迎用户'.$request['name'].'登录');
        } else {
            return Redirect::to('auth/login')->with('message', '用户名或密码错误')->withErrors("用户名或密码错误")->withInput();
        }
    }
    public function getIndex( ) {
        return view('index');
    }
    public function getLogout(){
        if(Auth::check())
        {
            Auth::logout();
        }
        return Redirect::to('index')->with('message','你现在已经退出登录了!');
    }
}
