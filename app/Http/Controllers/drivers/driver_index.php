<?php

namespace App\Http\Controllers\drivers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class driver_index extends Controller
{
    public  function  create (){
        return view('drivers.create_drives');
    }

    public function store (Request $request){
        $type_car= $request['type_car'];
        $name_driver=$request['name_driver'];
        $car_number=$request['car_number'];
        return redirect('create/drives');

    }

    public  function index( Request $request){
        $type_car= $request['type_car'];
        $name_driver=$request['name_driver'];
        $car_number=$request['car_number'];

        return view('drivers.driver_index')->
        with('type_car',$type_car)->with('name_driver',$name_driver)->
        with('car_number',$car_number);
    }
}
