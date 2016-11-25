<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Blog extends Model
{
    protected $table = 'blog_post';


    
    /*public static $blogPost = DB::table('blog_post')
    ->join('tumbnail', 'blog_post.id', '=', 'tumbmail.id')
    ->select('blog_post.*', 'tumbmail.*')
    ->get();*/
}
