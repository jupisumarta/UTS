<?php

namespace App\Http\Controllers;
use App\Models\Komen;

class KomenAdminController extends Controller{
    function index(){
        $data['list_komen'] = Komen::all();
        return view('admin.komen.index',$data);
    }
    function store(){
        $komen = new Komen;
        $komen->komentar = request('komentar');
        $komen->nama = request('nama');
        $komen->email = request('email');
        $komen->save();

        return redirect('master-data/komen');
    }
    function show(Komen $komen){
        $data['komen'] = $komen;
        return view('admin.komen.show',$data);
    }
}
