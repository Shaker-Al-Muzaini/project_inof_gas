@extends('layouts.main')
@section('bott')
    <div class="container">
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
                            <br>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">QR</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" name="qr">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">الوزن</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" name="weight">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" id="save">Save</button>
                        </form>

@stop
