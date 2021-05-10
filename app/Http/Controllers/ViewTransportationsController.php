<?php

namespace App\Http\Controllers;

use App\Models\Transportation;
use Illuminate\Http\Request;

class ViewTransportationsController extends Controller
{
    public function view()
    {
        $transportations = Transportation::with('organization')->get();
        //dd($transportation);
        $rate_nds = Transportation::sum('rate_nds');

        return view('view_transportation.info_transportation', [
            'transportations'=>$transportations,
            'rate_nds'=>$rate_nds
        ]);
    }
}
