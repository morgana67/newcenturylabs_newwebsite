<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PwnhealthController extends Controller
{
    public function status(Request $request){
        return response()->json([
            'response' => $request->all(),
        ]);
    }
}
