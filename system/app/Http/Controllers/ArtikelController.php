<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

class ArtikelController extends Controller{
    function index(){
        $user = request()->user();
        $data['list_artikel'] = $user->artikel;
        return view('admin.artikel.index',$data);
    }
    function create(){
        return view('admin.artikel.create');
    }
    function store(){
        $artikel = new artikel;
        $artikel ->id_user = request()->user()->id;
        $artikel ->judul = request('judul');
        $artikel ->isi = request('isi');
        $artikel->save();

        return redirect('master-data/artikel')->with('success', 'Data Berhasil Ditambah Dekk!!');
    }
    function show(Artikel $artikel){
        $data['artikel'] = $artikel;
        return view('admin.artikel.show',$data);
    }
    function edit(Artikel $artikel){
        $data['artikel'] = $artikel;
        return view('admin.artikel.edit',$data);
    }
    function update(Artikel $artikel){
        $artikel ->judul = request('judul');
        $artikel ->isi = request('isi');
        $artikel->save();

        return redirect('master-data/artikel')->with('success', 'Mantap Dek Berhasil Diedit!!');
    }
    function destroy(Artikel $artikel){
        $artikel->delete();

        return redirect('master-data/artikel')->with('danger', 'Haudahh Data Ilang!!');
    }
    function filter(){
        $judul = request('judul');
        $data['list_artikel'] = Artikel::where('judul','like',"%$judul%")->get();
        $data['judul'] = $judul;
        return view('admin.artikel.index',$data);
    }

}
