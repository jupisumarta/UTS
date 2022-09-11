@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 px-5 mt-5">
                <div class="card bg-secondary">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">
                        <form action="artikel/filter" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Judul</label>
                                <input type="text" class="form-control" name="judul" value="{{$judul ?? ""}}">
                            </div>
                            <button class="btn btn-sm btn-primary float-end"><i class="fa fa-search"></i>Filter</button>
                        </form>
                    </div>
                </div>
                <div class="card bg-secondary mt-2">
                    <div class="card-header">
                        Data Artikel
                        <a href="{{url('master-data/artikel/create')}}" class="btn btn-sm btn-primary float-end"><i class="fa fa-plus"></i>Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Isi</th>
                            </thead>
                            <tbody>
                                @foreach ($list_artikel as $artikel)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('master-data/artikel',$artikel->id)}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
                                            <a href="{{url('master-data/artikel',$artikel->id)}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                            @include('admin.utils.delete',['url'=> url('master-data/artikel',$artikel->id)])
                                        </div>
                                    </td>
                                    <td>{{$artikel->judul}}</td>
                                    <td>{{$artikel->pembuat->nama}}</td>
                                    <td>{!!substr(nl2br($artikel->isi),0,40)!!}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
