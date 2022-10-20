<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValiDateRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // 権限を使わない場合
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        // バリデーションのルール
        return [
            'name'    => 'required',
            'address' => 'required',
            'tel'     => 'required',
            'email'   => 'required|email'
        ];
    }

    public function messages() {
        // メッセージ
        return [
            'required' => '必須項目です。',
            'email' => 'メールアドレスの形式で入力してください。'
        ];
    }
}
