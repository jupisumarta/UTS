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
                        <form action="product/filter" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
                            </div>
                            <button class="btn btn-sm btn-primary float-end"><i class="fa fa-search"></i>Filter</button>
                        </form>
                    </div>
                </div>
                <div class="card bg-secondary mt-2">
                    <div class="card-header">
                        Data Produk
                        <a href="{{url('master-data/product/create')}}" class="btn btn-sm btn-primary float-end"><i class="fa fa-plus"></i>Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable ">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </thead>
                            <tbody>
                                @foreach ($list_product as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('master-data/product',$product->id)}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
                                            <a href="{{url('master-data/product',$product->id)}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                            @include('admin.utils.delete',['url'=> url('master-data/product',$product->id)])
                                        </div>
                                    </td>
                                    <td>{{$product->nama}}</td>
                                    <td>{{$product->harga}}</td>
                                    <td>{{$product->stok}}</td>
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
