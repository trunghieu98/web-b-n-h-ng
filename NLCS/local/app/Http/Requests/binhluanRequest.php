<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class binhluanRequest extends FormRequest


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
            'email1' => 'required',
            'ten' => 'required',
            'ghichu' => 'required',
        ];
    }
    public function messages()
    {

        return [
            'email1.required' => 'vui lòng nhập email',
            'ten.required' => 'vui lòng nhập họ tên',
            'ghichu.required' => 'vui lòng nhập họ tên',
        ];
    }
}
