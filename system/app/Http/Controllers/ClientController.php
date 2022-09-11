<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Artikel;
use App\Models\Komen;

class ClientController extends Controller{

    function showHome(){
        $data['list_product'] = Product::all();
        return view('template.home',$data);
    }
    function showShop(){
        $data['list_product'] = Product::all();
        return view('template.shop',$data);
    }
    function showDetail(Product $product){
        $data['product'] = $product;
        return view('template.produk',$data);
    }
    function showCart(){
        return view('template.cart');
    }
    function showBlog(){
        $data['list_artikel'] = Artikel::all();
        return view('template.blog',$data);
    }
    function showBlogDetail(Artikel $artikel){
        $data['artikel'] = $artikel;
        $data2['list_komen'] = Komen::all();
        return view('template.blog-detail',$data,$data2);
    }
    function showAbout(){
        return view('template.about');
    }
    function showContact(){
        return view('template.contact');
    }
    function showShoping(){
        return view('template.shoping');
    }
    function filter(){
        $nama = request('nama');
        $data['list_product'] = Product::where('nama','like',"%$nama%")->get();
        $data['nama'] = $nama;
        return view('template.shop',$data);
    }
}
