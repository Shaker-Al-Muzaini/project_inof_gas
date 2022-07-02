<?php

namespace App\Http\Controllers\distribution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index_distribution extends Controller
{
    public  function  index  (){
        return view('distribution.index_distribution');
    }
}
