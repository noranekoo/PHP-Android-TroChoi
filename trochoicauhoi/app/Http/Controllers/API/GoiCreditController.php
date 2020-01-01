<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GoiCredit;

class GoiCreditController extends Controller
{

    public function layCredit(){
        if(auth('api')->check())
        {
            $dsCredit = GoiCredit::all();
            return response()->json(['success'=>true, 'data'=>$dsCredit]);
        }
        return response()->json(['success'=>false]);
    }
}
