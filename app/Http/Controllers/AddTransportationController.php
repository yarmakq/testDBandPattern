<?php

namespace App\Http\Controllers;

use App\Models\Transportation;
use Illuminate\Http\Request;

class AddTransportationController extends Controller
{
    public function ViewTransportation(){
        $transportation = Transportation::all();

        return view('add_transportation.add_transportation',[
            'transportation'=>$transportation
        ]);
    }
}
