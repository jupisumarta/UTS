@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 px-5 mt-5">
                <div class="card bg-secondary">
                    <div class="card-header">
                        Detail Artikel
                    </div>
                    <div class="card-body">
                       <h3>{{$artikel->judul}}</h3>
                       <hr>
                       <p>
                        {!!nl2br($artikel->isi)!!}
                       </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
