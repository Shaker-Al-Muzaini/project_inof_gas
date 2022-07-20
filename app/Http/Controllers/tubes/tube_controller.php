<?php

namespace App\Http\Controllers\tubes; 
use App\Http\Controllers\Controller;
use App\Models\tube;
use Illuminate\Support\Str;
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class tube_controller extends Controller

{
    public   function create ()
    {
        $key=['2.5'=>'اسطوانة 2.5كغم ','5'=>'اسطوانة 5  كغم' ,'12'=>'اسطوانة 12  كغم','48'=>'اسطوانة 48 كغم '];

        return view('tubes.tubes_create')->with('key' ,$key);
    }


    public  function store  (Request $request  ){

        $validator=Validator::make($request->all(),[
            'weight'=>'required',
            'capacity'=>'required',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $capacity=$request['capacity']??'12';
        $price=6;
        $qr=str(random_int(1,10000000));
        $qr_code_name=Str::slug($qr).'.png';
        $price_count=$capacity*$price;
        $tube=new tube;
        $st=tube::get(['id'])->pluck('id')->last()+1;
        $r='127.0.0.1:8000/';
        $g=$r.$st;
        $tube->capacity=$capacity;
        $tube->weight=$request['weight'];
        $tube->qr=$qr;
        $tube->tu='/qr-code/'.$qr_code_name;
        $sev= QrCode::format('png');
        $sev->size(300);
        $sev->errorCorrection('H');
        $sev->backgroundColor(112, 238, 255);
//        $sev->color('');
        $sev->generate($g,'../public/qr-code/'.$qr_code_name);
        $tube->save();
     return redirect('index');
    }

    public function index2(Request $request,$id){
        define('pagination',5);
        $tube=tube::where('id',$id)->select('id','created_at','updated_at','qr','weight','capacity','tu')
            ->paginate(pagination);
        foreach($tube as $tubes) {
            $tubes->price=6;
            $tubes->price_count=$tubes->capacity* $tubes->price;
        }
//       dd($tube->toArray());
        return view('tubes.index')->with('tube',$tube);
    }

    public function index(Request $request)
    {

        define('pagination',5);
                $tube=tube::select('id','created_at','updated_at','qr','weight','capacity','tu')
            ->paginate(pagination);
        foreach($tube as $tubes) {
            $tubes->price=6;
            $tubes->price_count=$tubes->capacity* $tubes->price;
        }
        return view('tubes.index')->with('tube',$tube);

    }

    public  function edit($id){
       $idd=$id;
        $tube=tube::where('id',$id)
            ->first();
        $key=['2.5'=>'اسطوانة 2.5كغم ','5'=>'اسطوانة 5  كغم' ,'12'=>'اسطوانة 12  كغم','48'=>'اسطوانة 48 كغم '];
        return view('tubes.tube_update')->with('key' ,$key)->with('tube',$tube);
    }

    public  function  update (Request $request, $id){
        $idd=$id;
        $capacity=$request['capacity'];
        $weight=$request['weight'];
        $price=6;
        $price_count=$capacity*$price;
        $tube=tube::where('id',$id)->first();
        $tube->capacity=$capacity;
        $tube->weight=$weight;
        $tube->save();
        return redirect('index');
    }

    public  function  destroy($id){
        $idd=$id;
        $tube=tube::where('id' ,$id)->delete();
        return redirect('index');

    }

}



