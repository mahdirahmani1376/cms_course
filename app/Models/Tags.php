<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    public function posts(){
        return $this->morphedByMany('App\Post','taggable');
    }

    public function videos(){
        return $this->morphedByMany('App\Video','taggable');
    }
}
