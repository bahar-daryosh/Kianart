<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormElement extends Model
{
    //
    protected $fillable = [

        'name',
        'form_id',
        'element_type_id',
        'caption'

    ];
}
