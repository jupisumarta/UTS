<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

class product extends Model {
    protected $table = 'product';

    function seller(){
        return $this->belongsTo(User::class,'id_user');
    }
}
