<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable= [

        'title',
        'caption',
        'photo_id',
        'user_id',
        'category_id'
    ];

    public function photo() {
        return $this->belongsTo('App\Photo','photo_id');
    }

    public function user(){

        return $this->belongsTo('App\User','user_id');
    }
    public function category(){

        return $this->belongsTo('App\Category');
    }
    public function comments(){

        return $this->hasMany('App\Comment');
    }
}
