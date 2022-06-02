<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use App\Registration;

class QRController extends Controller
{
    public function generateQrCode($id) 
    {
        $registration = Registration::find($id);
        return view('qrcode', compact('registration'));
    }
}
