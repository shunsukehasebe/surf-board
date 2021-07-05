<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'title' , 'content' ,
    ];
    
    //この投稿を所有するユーザ
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //この投稿を所有するポイント
    public function point()
    {
        return $this->belongsTo(Point::class);
    }
}
