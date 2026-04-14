<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
    public function messages()
    {
        return [
            'categry_id' =>
            'first_name.required'=>'姓を入力してください'
            'last_name.required'=>'名を入力してください'
            'gender.required'=>'性別を入力してください'
            'email.required'=>'メールアドレスを入力してください'
            'email.email'=>'メールアドレスはメール形式で入力してください'
            'tel.required'=>'電話番号を入力してください'
            'tel.numeric'=>'電話番号は半角英数字で入力してください'
            'tel.digits_between'=>'電話番号は５桁まで数字で入力してください'
            'address.required'=>'住所を入力してください'
            'building'=>'（入力必須ではありません）'
            'detail.required'=>'お問い合わせの種類を選択してください'
            'created_at.required'=>'お問い合わせ内容を入力してください'
            'updated_at.digits_between'=>'お問い合わせ内容は120文字以内で入力してくだい'
        ];
    }
}
