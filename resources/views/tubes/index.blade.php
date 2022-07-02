<style>
    div {text-align: center;}
</style>
@extends('layouts.main')
@section('bott')
    <table class="table table-success table-striped">
        <thead>
        <th scope="col">حذف</th>
        <th scope="col">تعديل</th>
        <th scope="col">تاريخ الإنشاء</th>
        <th scope="col">تاريخ التعديل </th>
        <th scope="col">السعر النهائي</th>
        <th scope="col">سعر كيلو الغاز</th>
        <th scope="col">كمية  الغاز داخل ألأسطونيه</th>
        <th scope="col"> وزن ألأسطونه كامل كغم</th>
        <th scope="col">الرمز الخاص بالأسطوانة</th>
        <th scope="col">ID</th>
        </thead>
        <tbody>
        @foreach($tube as $tubes )
            <tr>
                <td>
                    <form method="post" action="{{URL('tube/delete'.$tubes->id)}}">
                        @csrf
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </td>
                <td><a href="{{URL('tube/edit'.$tubes->id)}}" class="btn btn-success">تعديل</a></td>
                <td>{{$tubes->created_at}}</td>
                <td>{{$tubes->updated_at}}</td>
                <td>{{$tubes->price_count .'شيكل'}}</td>
                <td>{{$tubes->price.'شيكل'}}</td>
                <td >{{$tubes->capacity .'كغم'}}</td>
                <td>{{$tubes->weight .'كغم'}}</td>
                <td>{{$tubes->qr}}</td>
                <td >{{$tubes->id}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="d-flex justify-content-center">
            <p> {{ $tube->links('pa') }}</p>
        </div>
    </div>

    <br>
    <div>
        <a href="{{URL('tubes/create')}}">أضافه اسطونه جديدة</a>
        <br>



@stop
