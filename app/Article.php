<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable =[
        'title', 'content', 'author'
    ];
//     protected $ fillable = [] ;, adalah array yang digunakan untuk mencantumkan semua kolom yang dapat dimanipulasi (masukkan atau
// perbarui tabel tertentu).

    public static function valid()
    {
    	return array(
    		'content'=>'require'
    	);
    }
    public function comments(){
    	return $this->hasMany('App\Comment','article_id');
    }
}
