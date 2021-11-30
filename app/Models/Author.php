<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable=['name','age','nationality'];
    public static $rules=array(
        'name'=>'required',
        'age'=>'integer|min:0|max:150',
        'nationality'=>'required',
    );
    public function getDetail(){
        $text='ID'.$this->id.' 名前'.$this->name.' 国籍'.$this->nationality;
        return $text;
    }
    public function reviews(){
        return $this->belongsToMany(Book::class);
    }
}

