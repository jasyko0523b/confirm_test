<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpinionRequest extends FormRequest
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
            'sei' => 'required | string',
            'mei' => 'required | string',
            'gender' => 'required',
            'email' => 'required | email:filter',
            'postcode' => 'required | string',
            'address' => 'required | string',
            'building_name' => 'string',
            'opinion' => 'required | string',
        ];
    }

    public function messages(){
        return [
            'sei.required' => '姓を入力してください',
            'sei.string' => '姓を文字列で入力してください',
            'mei.required' => '名を入力してください',
            'mei.string' => '名を文字列で入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email:filter' => 'メールアドレスの形式で入力してください',
            'postcode.required'=>'郵便番号を入力してください',
            'postcode.string'=>'郵便番号をハイフンを含む8桁で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'building.string' => '建物名を文字列で入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.string' => 'ご意見を文字列で入力してください',
        ];
    }
}
