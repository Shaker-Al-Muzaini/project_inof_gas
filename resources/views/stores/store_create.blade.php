@extends('layouts.main')
@section('bott')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <form action="{{URL('home')}}"  method="get" enctype="multipart/form-data">
                        @csrf
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">id_tube</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="id_tube">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">id_branch</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="id_branch">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">id_driver</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="id_driver">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" id="save">Save</button>
                    </form>

@stop
