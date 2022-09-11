<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller{
    function index(){
        $data['list_user'] = User::withCount('product')->get();
        return view('admin.user.index',$data);
    }
    function create(){
        return view('admin.user.create');
    }
    function store(){
        $User = new user;
        $User ->nama = request('nama');
        $User ->username = request('username');
        $User ->email = request('email');
        $User ->password = bcrypt (request('password'));
        $User->save();

        $UserDetail = new UserDetail;
        $UserDetail->id_user = $User->id;
        $UserDetail->no_handphone = request('no_handphone');
        $UserDetail->save();

        return redirect('master-data/user')->with('success', 'Data Berhasil Ditambah Dekk!!');
    }
    function show(User $User){
        $data['user'] = $User;
        return view('admin.user.show',$data);
    }
    function edit(User $User){
        $data['user'] = $User;
        return view('admin.user.edit',$data);
    }
    function update(User $User){
        $User ->nama = request('nama');
        $User ->username = request('username');
        $User ->email = request('email');
        if(request('password')) $User ->password = bcrypt (request('password'));
        $User->save();

        return redirect('master-data/user')->with('success', 'Mantap Dek Berhasil Diedit!!');
    }
    function destroy(User $User){
        $User->delete();

        return redirect('master-data/user')->with('danger', 'Haudahh Data Ilang!!');
    }

}
