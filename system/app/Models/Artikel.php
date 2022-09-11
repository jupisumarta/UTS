<?php

namespace App\Models;

class artikel extends Model {
    protected $table = 'artikel';

    function pembuat(){
        return $this->belongsTo(User::class,'id_user');
    }

    // function cut(){
    //     $num_char = 50;
    //     $text = request('isi');
    //     return $this->substr($text, 0, $num_char) . '...';
    // }
}
