<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    //
    protected $fillable = [

        'name',
        'owner_id'

    ];
    public function Elements(){

        return $this->hasMany('App\FormElement');
    }
}
