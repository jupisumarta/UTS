@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 px-5 mt-5">
                <div class="card bg-secondary mt-2">
                    <div class="card-header">
                        Data komen
                        <a href="{{url('master-data/komen')}}"></a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Komentar</th>
                            </thead>
                            <tbody>
                                @foreach ($list_komen as $komen)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('master-data/komen',$komen->id)}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
                                        </div>
                                    </td>
                                    <td>{{$komen->nama}}</td>
                                    <td>{{$komen->email}}</td>
                                    <td>{!!nl2br($komen->komentar)!!}</td>
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
