<?php

namespace App;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'content', 'likes',
    ];
}
