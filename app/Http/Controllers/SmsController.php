<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vonage\Laravel\Facade\Nexmo;


class SmsController extends Controller
{
    public function index()
    {
       Nexmo::message()->send([
           'to' => '316',
           'from' => 'verzender',
           'text' => 'Test SMS'
       ]);

       echo "Bericht verzonden!";
    }
}
