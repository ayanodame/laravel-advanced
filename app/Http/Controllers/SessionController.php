<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function GetSession(Request $request){
        $data=$request->session()->get('text');
        return view('/review',['data'=>$data]);
    }
    public function PostSession(Request $request){
        $text=$request->sendtext;
        $request->session()->put('text',$text);
        return redirect('/review');
    }
}
