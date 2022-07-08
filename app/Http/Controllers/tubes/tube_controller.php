<?php

namespace App\Http\Controllers\tubes;   
 
use App\Http\Controllers\Controller;   
use App\Models\tube;  
use Illuminate\Http\Request; 
 
class tube_controller extends Controller 
{ 
    public   function create ()
    {
        $key=['2.5'=>'اسطوانة 2.5كغم ','5'=>'اسطوانة 5  كغم' ,'12'=>'اسطوانة 12  كغم','48'=>'اسطوانة 48 كغم '];

        return view('tubes.tubes_create')->with('key' ,$key);
    }


    public  function store  ( Request $request){

        $capacity=$request['capacity'];
        $qr=$request['qr']; 
        $weight=$request['weight'];
        $price=6;
        $price_count=$capacity*$price;
        $tube=new tube();
        $tube->capacity=$capacity; 
        $tube->qr=$qr;
        $tube->weight=$weight;  
        $tube->save();
        return redirect('index');  

    }

    public function index(Request $request)
    {
        define('pagination',5,);
        $tube=tube::select('id','created_at','updated_at','qr','weight','capacity')
            ->paginate(pagination);
        foreach($tube as $tubes) {
            $tubes->price=6;
            $tubes->price_count=$tubes->capacity* $tubes->price;
        }
        return view('tubes.index')->with('tube',$tube);

    }

    public  function edit($id){ 
        $tube=tube::where('id',$id)
            ->first();
        $key=['2.5'=>'اسطوانة 2.5كغم ','5'=>'اسطوانة 5  كغم' ,'12'=>'اسطوانة 12  كغم','48'=>'اسطوانة 48 كغم '];
        return view('tubes.tube_update')->with('key' ,$key)->with('tube',$tube);
    }

    public  function  update (Request $request, $id){
        $capacity=$request['capacity'];
        $qr=$request['qr'];
        $weight=$request['weight'];
        $price=6;
        $price_count=$capacity*$price;
        $tube=tube::where('id',$id)->first();
        $tube->capacity=$capacity;
        $tube->qr=$qr;
        $tube->weight=$weight;
        $tube->save();
        return redirect('tubes/create');
    }

    public  function  destroy($id){
        $tube=tube::where('id' ,$id)->delete();
        return redirect('index');

    }



}
