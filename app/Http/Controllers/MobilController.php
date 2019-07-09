<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mobil;

class MobilController extends Controller
{
    //
    public function postCar(Request $request){

        $result = mobil::insert([
            'number_plate' => $request->input('number_plate'),
            'colour' => $request->input('colour'),

        ]);
            if($result == true){
                return response()->json([
                    'message' => 'Success bos',
                    'res' => $result
                ]);
            }

    }
    public function getCar(){

        $result = mobil::get();

        return response()->json([
            'res' => $result
        ]);

    }
    
}
