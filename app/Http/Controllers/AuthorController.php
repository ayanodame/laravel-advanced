<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;


class AuthorController extends Controller
{
    public function authview(Request $request){
        $text=['text'=>'ログイン前'];
        return view('auth',$text);
    }
    public function login(Request $request){
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            $text=Auth::user()->name.'さん、こんにちは';
        } else {
            $text='メールアドレスまたはパスワードが間違っています';
        }
        return view('auth',['text'=>$text]);
    }
}