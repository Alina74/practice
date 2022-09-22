<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function staticManager()
    {
        $name="Сайт робототехники";
        $address="г. Челябинск, Энтузиастов 17";
        $time="с 9:00 до 18:00";
        return view('staticManager', ["nameSite"=>$name, "address"=>$address, "time"=>$time]);
    }
}
