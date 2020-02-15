<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name',
        'image',
        'caption'
    ];
    public function workSamples(){

        return $this->hasMany('App\WorkSample');

    }
}
