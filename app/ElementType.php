<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElementType extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    public function Elements(){
        return $this->belongsTo('App\FormElement');
    }
}
