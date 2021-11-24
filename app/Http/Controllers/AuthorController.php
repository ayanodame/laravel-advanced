<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function indexview(){
        $items=Author::all();
        return view('index',['items'=>$items]);
    }
    public function deleteview(Request $request){
        $Author=Author::find($request->id);
        return view('delete',['form'=>$Author]);
    }
    public function delete(Request $request){
        Author::find($request->id)->delete();
        return redirect('/');
    }
}
