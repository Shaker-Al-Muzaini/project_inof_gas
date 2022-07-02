@extends('layouts.main')
@section('bott')
    <div class="container">
<div class="col-12">
    <div class="row">
        <form action="{{URL('index/drives')}}"  method="get" enctype="multipart/form-data">
            @csrf
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">اسم السائق</span>
                <input type="text" class="form-control" aria-label="Sizing example input" name="name_driver">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">نوع السيارة</span>
                <input type="text" class="form-control" aria-label="Sizing example input" name="type_car">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">رقم  السيارة</span>
                <input type="text" class="form-control" aria-label="Sizing example input" name="car_number">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" id="save">Save</button>
        </form>
    </div>
</div>
    </div>

@endsection
