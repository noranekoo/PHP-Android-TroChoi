<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class DangNhapRequest extends FormRequest
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
            'ten_dang_nhap'=>'required|min:6|max:20',
            'mat_khau'=>'required|min:6|max:20'
        ];
    }
    public function messages()
    {
        return [
            'ten_dang_nhap.required' => 'Chưa nhập tên đăng nhập !!',
            'ten_dang_nhap.min' => 'Tên đăng nhập không hợp lệ !!',
            'ten_dang_nhap.max' => 'Tên đăng nhập hợp lệ !!',
            'mat_khau.required' => 'Chưa nhập mật khẩu !!',
            'mat_khau.min' => 'Mật khẩu không hợp lệ !!',
            'mat_khau.max' => 'Mật khẩu không hợp lệ !!'
        ];
    }
}
