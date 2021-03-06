@extends('layouts.main')
@section('bott')
    <div class="container">
        @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
        @endif
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <form action="{{URL('store')}}"  method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group input-group-lg">
                                <span class="input-group-text" id="inputGroup-sizing-lg">سعه ألأنبوبه</span>
                                <select name="capacity" class="form-control" id="" aria-label="Sizing example input">
                                    <option value=""></option>
                                    @foreach($key as $capacitys=>$value)
                                        <option value= "{{$capacitys}}">{{$value}}</option>
                                    @endforeach

                                </select>
                            </div>
                            @error('capacity')<span class="text-danger">{{$message}}</span>@enderror
                            <br>
{{--                            <div class="input-group mb-3">--}}
{{--                                <span class="input-group-text" id="inputGroup-sizing-default">QR</span>--}}
{{--                                <input type="text" class="form-control" aria-label="Sizing example input" name="qr" value="{{old('nameQr')}}">--}}
{{--                                @error('qr')<span class="text-danger">{{$message}}</span>@enderror--}}
{{--                            </div>--}}
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">الوزن</span>

                                <input type="text" class="form-control" aria-label="Sizing example input" name="weight">
                            </div>
                            @error('weight')<span class="text-danger">{{$message}}</span>@enderror
                            <br>
                            <button type="submit" class="btn btn-primary" id="save">Save</button>
                        </form>

@stop
