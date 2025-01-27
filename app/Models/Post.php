<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // app/Models/Post.php
    protected $fillable = ['name', 'content','user_id'];


    // ユーザーとのリレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // コメントのリレーション
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
