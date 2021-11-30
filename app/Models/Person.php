<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable=['name','email'];
    public static $rules =array(
        'name'=>'required',
        'email'=>'required',
    );
}
