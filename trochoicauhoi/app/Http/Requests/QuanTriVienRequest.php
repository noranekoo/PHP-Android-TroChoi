<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuanTriVienRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'old_matkhau' =>'bail|required|min:6:max:20',
            'new_matkhau'=>'bail|required|min:6:max:20',
            're_matkhau'=>'bail|same:new_matkhau'
        ];
    }
     public function messages()
    {
        return [
            'old_matkhau.required'=>'Mật khẩu cũ không được để trống !!',
            'old_matkhau.min, old_matkhau.max'=>'Mật khẩu cũ không đúng !!',
            'new_matkhau.required'=>'Mật khẩu mới không được để trống',
            'new_matkhau.min'=>'Mật khẩu mới quá ngắn',
            'new_matkhau.max'=>'Mật khẩu mới quá dài',
            're_matkhau.same'=>'Nhập lại mật khẩu không đúng'
        ];
    }
}
