<?php

namespace App\Http\Controllers\store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller

{

    public   function create() 
    {
        return view('stores.store_create');
    }




    public  function store (Request $request){

        $id_tube= $request['id_tube'];
        $id_branch=$request['id_branch'];
        $id_driver=$request['id_driver'];
        return redirect('store/create');

    }



    public function home (Request $request)
    {
        $id_tube= $request['id_tube'];
        $id_branch=$request['id_branch'];
        $id_driver=$request['id_driver'];
        return view('stores.home_store')->
        with('id_tube',$id_tube)->with('id_branch',$id_branch)->with('id_driver',$id_driver);

    }


}
