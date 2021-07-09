<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    
    //このポイントが所有する投稿
    
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    
    public function loadRelationshipCounts()
    {
        $this->loadCount('messages');
    }
}
