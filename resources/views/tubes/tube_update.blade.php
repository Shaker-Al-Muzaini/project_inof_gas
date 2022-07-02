@extends('layouts.main')
@section('bott')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <form action="{{URL('tube/update'.$tube->id)}}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="inputGroup-sizing-lg">capacity</span>
                            <select name="capacity" class="form-control" id="capacity" aria-label="Sizing example input">
                                <option value="-1"></option>
                                @foreach($key as $keys=>$value)
                                    <option value="{{$keys}}" @if($keys == $tube->capacity) selected @endif;
                                    >{{$value}}</option>
                                @endforeach
r
                            </select>

                            <br>
                        </div>
                        <br>
{{--                        <div class="input-group mb-3">--}}
{{--                            <span class="input-group-text" id="inputGroup-sizing-default">QR</span>--}}
{{--                            <input type="text" class="form-control" aria-label="Sizing example input" name="qr" value="{{$tube->qr}}">--}}
{{--                        </div>--}}
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">الوزن</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="weight" value="{{$tube->weight}}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" id="save">Save</button>
                    </form>

@stop
