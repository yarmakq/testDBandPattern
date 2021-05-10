<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Transportation;
use Illuminate\Http\Request;

class AddTransportationController extends Controller
{
    public function ViewTransportation(){
        $organizations = Organization::all();

        return view('add_transportation.add_transportation', ['organizations'=>$organizations]);
    }
}
