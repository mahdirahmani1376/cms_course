<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    protected $dates =  ['deleted_at'];

    protected $fillable = [
        'title',
        'content',
        'is_admin',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function photos(){
        return $this->morphMany('App\photo','imageable');
    }

    public function tags(){
        return $this->morphToMany('App\Tag','taggable');
    }


}
