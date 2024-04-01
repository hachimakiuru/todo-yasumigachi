<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;// SoftDeletesトレイトをインポート

class Post extends Model
{
    use HasFactory;
    use SoftDeletes; // SoftDeletesトレイトを使用

    protected $fillable = [
        'title',
        'body', // 'content' から 'body' に変更
        'image',
    ];

    protected $dates = ['deleted_at']; // ソフトデリートするカラム

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
