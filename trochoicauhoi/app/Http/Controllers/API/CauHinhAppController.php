<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CauHinhAppController extends Controller
{
    public function layCauHinhApp()
    {
    	if(auth('api')->check())
    	{
    		$cauHinhApp = App\CauHinhApp::all();
    		return response()->json(['success'=>true,'data'=>$cauHinhApp]);
    	}
    	return response()->json(['success'=>false, 'message'=> 'Token is required']);
    }
}
