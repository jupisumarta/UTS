@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 px-5 mt-5">
                <div class="card bg-secondary">
                    <div class="card-header">
                        Detail Komentar
                    </div>
                    <div class="card-body">
                        <p>
                            Nama : {{$komen->nama}}
                        </p>

                        <p>
                            Email : {{$komen->email}}
                        </p>

                       <p>
                            Komentar : {!!nl2br($komen->komentar)!!}
                       </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
