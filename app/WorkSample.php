<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkSample extends Model
{
    //
    protected $fillable= [

        'title',
        'image',
        'caption',
        'skill_id',
        'category_id',
        'subtitle',
        'customerName',
        'workConspectus'
    ];

    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function skill(){

        return $this->belongsTo('App\Skill');
    }

}
