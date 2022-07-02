<style>
    div {text-align: center;}
</style>
@extends('layouts.main')
@section('bott')

    <table class="table table-success table-striped">
        <thead>
{{--        <th scope="col">حذف</th>--}}
        <th scope="col">تعديل</th>
        <th scope="col">تاريخ الإنشاء</th>
        <th scope="col">تاريخ التعديل </th>
        <th scope="col">السعر النهائي</th>
        <th scope="col">سعر كيلو الغاز</th>
        <th scope="col">كمية  الغاز داخل ألأسطونيه</th>
        <th scope="col"> وزن ألأسطونه كامل كغم</th>
        <th scope="col">صوره QR </th>
        <th scope="col">ID</th>
        </thead>
        <tbody>
        @foreach($tube as $tubes )
            <tr>
{{--                <td>--}}
{{--                    <form method="post" action="{{URL('tube/delete'.$tubes->id)}}">--}}
{{--                        @csrf--}}
{{--                        <button type="submit" class="btn btn-danger">حذف</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
                <td><a href="{{URL('tube/edit'.$tubes->id)}}" class="btn btn-success">تعديل</a></td>
                <td>{{$tubes->created_at}}</td>
                <td>{{$tubes->updated_at}}</td>
                <td>{{$tubes->price_count .'شيكل'}}</td>
                <td>{{$tubes->price.'شيكل'}}</td>
                <td >{{$tubes->capacity .'كغم'}}</td>
                <td>{{$tubes->weight .'كغم'}}</td>
                <td><img src="{{$tubes->tu}}" alt="null" height="100" width="140"></td>
{{--                    @if(session('code'))--}}
{{--                            <img src="{{asset('qr-code'.session('code'))}}" alt="{{session('code')}}">--}}
{{--                    @endif--}}
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

{{--
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:tH6r+bHcr1WKIalSV/+m8k9fDwtb9PaMWc2zAxUaEZk=
APP_DEBUG=true
APP_URL=https://shaker3.b-lingo.info

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blingoin_gas
DB_USERNAME=blingoin_shaker-gas
DB_PASSWORD=2OFwP%j_kv6+

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

--}}
