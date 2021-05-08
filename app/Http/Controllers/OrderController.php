<?php

namespace App\Http\Controllers;

use App\Models\Transportation;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function AddTransportation(Request $request) {
        //dd($request->all());
        $trans= \DB::table('transportations')->insert([
            "date_of_creation" => $request->post('date_of_creation'),
            "track_number" => $request->post('track_number'),

            "organization_id" => $request->post('organization_id'),
            "num_contract_application" => $request->post('num_contract_application'),
            "date_creation" =>$request->post('date_creation'),

            "name_manager" => $request->post('name_manager'),
            "phone_manager" => $request->post('phone_manager'),
            "email_manager" => $request->post('email_manager'),
            "num_ati" => $request->post('num_ati'),

            "drive" => $request->post('drive'),
            "truck" => $request->post('truck'),

            "description" => $request->post('description'),

            "path_first" => $request->post('path_first'),
            "path_second" => $request->post('path_second'),
            "interval" => $request->post('interval'),
            "rate_nds" => $request->post('rate_nds'),
            "rate_no_nds" => $request->post('rate_no_nds'),
            "cost_per_kilometer" => $request->post('cost_per_kilometer'),
            "cargo_character" => $request->post('cargo_character'),
            "cargo_weight" => $request->post('cargo_weight'),
            "cargo_volume" => $request->post('cargo_volume'),
            "date_departure" => $request->post('date_departure'),
            "date_arrival" => $request->post('date_arrival')
        ]);

            if ($trans){
                echo 'good';
            } else {
                echo 'bad';
            }

        return redirect()->route('orders.store')->with('success', 'Data Added');
//        Transportation::(
//            [



        return view('add_transportation.add_transportation');
    }
}
