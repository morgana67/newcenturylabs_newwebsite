<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class PwnhealthController extends Controller
{
    public function status(Request $request){
        Log::debug('-- Call ---'.json_encode($request->all()));
        return response()->json([
            'response' => $request->all(),
        ]);
    }
}
