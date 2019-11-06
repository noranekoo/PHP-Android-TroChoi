<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoiCreditRequest extends FormRequest
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
            'ten_goi_credit'=>'bail|required|max:255|string|unique:goi_credit,ten_goi_credit',
            'credit'=>'bail|required|min:0|numeric',
            'so_tien'=>'bail|required|min:0|numeric',
        ];
    }
    public function messages()
    {
        return [
            'ten_goi_credit.required'=>'Tên gói Credit không được để trống !!',
            'ten_goi_credit.max'=>'Tên gói Credit quá dài !!',
            'ten_goi_credit.unique'=>'Tên gói đã tồn tại,vui lòng kiểm tra lại !!',
            'credit.required'=>'Credit không được để trống !!',
            'credit.min'=>'Credit không được bé hơn 0 !!',
            'credit.numeric'=>'Credit phải là số !!',
            'so_tien.required'=>'Số tiền không được để trống !!',
            'so_tien.min'=>'Số tiền không được bé hơn 0 !!',
            'so_tien.numeric'=>'Số tiền phải là số !!'
        ];
    }
}
