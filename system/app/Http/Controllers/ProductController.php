<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller{
    function index(){
        $user = request()->user();
        $data['list_product'] = $user->product;
        return view('admin.product.index',$data);
    }
    function create(){
        return view('admin.product.create');
    }
    function store(){
        $product = new product;
        $product ->id_user = request()->user()->id;
        $product ->nama = request('nama');
        $product ->harga = request('harga');
        $product ->stok = request('stok');
        $product ->berat = request('berat');
        $product ->deskripsi = request('deskripsi');
        $product->save();

        return redirect('master-data/product')->with('success', 'Data Berhasil Ditambah Dekk!!');
    }
    function show(Product $product){
        $data['product'] = $product;
        return view('admin.product.show',$data);
    }
    function edit(Product $product){
        $data['product'] = $product;
        return view('admin.product.edit',$data);
    }
    function update(Product $product){
        $product ->nama = request('nama');
        $product ->harga = request('harga');
        $product ->stok = request('stok');
        $product ->berat = request('berat');
        $product ->deskripsi = request('deskripsi');
        $product->save();

        return redirect('master-data/product')->with('success', 'Mantap Dek Berhasil Diedit!!');
    }
    function destroy(Product $product){
        $product->delete();

        return redirect('master-data/product')->with('danger', 'Haudahh Data Ilang!!');
    }
    function filter(){
        $nama = request('nama');
        $data['list_product'] = Product::where('nama','like',"%$nama%")->get();
        $data['nama'] = $nama;
        return view('admin.product.index',$data);
    }

}
