<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CauHinhTroGiupRequest extends FormRequest
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
            'loai_tro_giup'=>'bail|required|numeric|min:1|max:4',
            'thu_tu'=>'bail|required|numeric|min:1|max:4',
            'credit'=>'bail|required|numeric|min:0'
        ];
    }
    public function messsage()
    {
        return [
            'loai_tro_giup.required'=>'Loại trợ giúp không được để trống !!',
            'loai_tro_giup.numeric'=>'Loại trợ giúp phải là số !!',
            'loai_tro_giup.min'=>'Loại trợ giúp không được bé hơn 1 !!',
            'loai_tro_giup.max'=>'Loại trợ giúp không được lớn hơn 4 !!',
            'thu_tu.required'=>'Thứ tự không được để trống !!',
            'thu_tu.numeric'=>'Thứ tự phải số !!',
            'thu_tu.min'=>'Thứ tự không được bé hơn 1',
            'thu_tu.max'=>'Thứ tự không được lớn hơn 4',
            'credit.required'=>'Credit không được để trống !!',
            'credit.numeric'=>'Credit phải số !!',
            'credit.min'=>'Credit không được bé hơn 1'
        ];
    }
}
