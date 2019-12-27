<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CauHinhApp;
use App\CauHinhDiemCauHoi;
use App\CauHinhTroGiup;

class CauHinhController extends Controller
{
    public function layCauHinhApp()
    {
    	if(auth('api')->check())
    	{
    		$cauHinhApp = CauHinhApp::all()->first();
    		return response()->json($cauHinhApp);
    	}
    	return response()->json(['success'=>false, 'message'=> 'Token is required']);
    }

    public function layCauHinhDiem()
    {
    	if(auth('api')->check())
    	{
    		$cauHinhDiem = CauHinhDiemCauHoi::all();
    		return response()->json(['data'=>$cauHinhDiem]);
    	}
    	return response()->json(['success'=>false, 'message'=> 'Token is required']);
    }

    public function layCauHinhTroGiup()
    {
    	if(auth('api')->check())
    	{
    		$cauHinhTroGiup = CauHinhTroGiup::all();
    		return response()->json(['data'=>$cauHinhTroGiup]);
    	}
    	return response()->json(['success'=>false, 'message'=> 'Token is required']);
    }

}
