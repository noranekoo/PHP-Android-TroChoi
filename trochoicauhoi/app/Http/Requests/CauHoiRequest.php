<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class CauHoiRequest extends FormRequest
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
            'noi_dung'=>'bail|required|string|max:255|unique:cau_hoi,noi_dung',
            'phuong_an_a'=>'bail|required|max:255|different:phuong_an_b,phuong_an_c,phuong_an_d',
            'phuong_an_b'=>'bail|required|max:255|different:phuong_an_a,phuong_an_c,phuong_an_d',
            'phuong_an_c'=>'bail|required|max:255|different:phuong_an_b,phuong_an_a,phuong_an_d',
            'phuong_an_d'=>'bail|required|max:255|different:phuong_an_b,phuong_an_c,phuong_an_a'

        ];
    }
    public function messages()
    {
        return [
            'noi_dung.required'=>'Nội dung câu hỏi không được để trống !!',
            'noi_dung.max'=>'Nội dung câu hỏi quá dài !!',
            'noi_dung.unique'=>'Câu hỏi đã tồn tại',
            'phuong_an_a.required'=>'Phương án A không được để trống !!',
            'phuong_an_a.max'=>'Phương án A quá dài !!',
            'phuong_an_a.different'=>'Phương án A không được trùng phương án khác !!',
            'phuong_an_b.required'=>'Phương án B không được để trống !!',
            'phuong_an_b.max'=>'Phương án B quá dài !!',
            'phuong_an_b.different'=>'Phương án B không được trùng phương án khác !!',
            'phuong_an_c.required'=>'Phương án C không được để trống !!',
            'phuong_an_c.max'=>'Phương án C quá dài !!',
            'phuong_an_c.different'=>'Phương án C không được trùng phương án khác !!',
            'phuong_an_d.required'=>'Phương án D không được để trống !!',
            'phuong_an_d.max'=>'Phương án D quá dài !!',
            'phuong_an_d.different'=>'Phương án D không được trùng phương án khác !!'
        ];
    }
}
