<?php

namespace App\Http\Controllers;
use App\Models\Komen;

class KomenController extends Controller{
    function store(){

        $komen = new Komen();
        $komen->komentar = request('komentar');
        $komen->nama = request('nama');
        $komen->email = request('email');
        $komen->save();

        return redirect()->back();
    }
}
