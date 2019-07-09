<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slot;

class SlotController extends Controller
{
    //  
    public function getSlotCar(){

        $result = slot::where('mobil_id','6')->get();
        
        return response()->json([
            'message' => 'The Free Slot',
            'res' => $result
        ]);

    }

}
