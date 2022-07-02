<?php

namespace App\Http\Controllers\QRCode;

use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class qrcontroller extends Controller
{
    public  function  index (){
        $qrcode=QrCode::generate('no');
        return view('qr.qrindex',compact('qrcode'));


}


}
