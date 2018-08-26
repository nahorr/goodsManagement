<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function setEmaileAttribute($value) {
        if ( empty($value) ) { // will check for empty string
        $this->attributes['email'] = NULL;
        } else {
            $this->attributes['email'] = $value;
        }
    }
}
