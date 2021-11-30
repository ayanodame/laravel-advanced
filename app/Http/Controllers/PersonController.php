<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function indexview(){
        return view('person.index');
    }
    public function add(Request $request){
        $this->validate($request,Person::$rules);
        $form=$request->all();
        Person::create($form);
        return redirect('/thanks');
    }
    public function thanksview(){
        return view('person.thanks');
    }
}
