<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElementListValue extends Model
{
    //
    protected $fillable = [

        'name',
        'form_element_id',
        'value',
        'ip_address'

    ];

    public function Elements(){

        return $this->belongsTo('App\FormElement');

    }
}
