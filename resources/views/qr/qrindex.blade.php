@extends('layouts.main')
@section('bott')
    <div class="col-12">
    <div class="row">
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @endif
            {!! $qrcode !!}
        </div>
        <div class="d-flex justify-content-center">
            <h1>Shaker  almaznin</h1>
        </div>
    </div>
    </div>
@endsection
