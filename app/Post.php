<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
class Post extends Model
{
    //
    protected $table = 'posts';

    protected $fillable =[
    	'title',
    	'content',
    	'is_feature',
    ];

    public function comments()
    {
    	return $this ->hasMany(Comment::class);
    }
}
