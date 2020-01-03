<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailController;
use App\NguoiChoi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class SendMailController extends Controller
{
     public function basic_email($email) 
     {
      
     	$nguoichoi = NguoiChoi::where('email',$email)->get();
      if($nguoichoi->count() == 0)
        return response()->json(['success'=>false, 'message'=>'Email không tồn tại']);
      else
        $nguoichoi = $nguoichoi->first();
    	$objDemo = new \stdClass();
    	$objDemo->nguoi_nhan = $nguoichoi->ten_dang_nhap;
    	$objDemo->mat_khau = Str::random(6);
    	$nguoichoi->mat_khau = Hash::make($objDemo->mat_khau);
		  $nguoichoi->save();
      Mail::to($email)->send(new MailController($objDemo));
      return response()->json(['success'=>true, 'message'=>'Đã gửi thông tin đến '.$email]);
  	 }
}
