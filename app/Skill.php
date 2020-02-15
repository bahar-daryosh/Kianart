<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $fillable = [
        'name',
        'body',
        'image'
    ];
    public function workSamples(){

        return $this->hasMany('App\WorkSample');

    }
}
