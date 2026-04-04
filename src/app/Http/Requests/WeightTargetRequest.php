<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeightTargetRequest extends FormRequest
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
          'current_weight' => 'required|numeric|regex:/^\d{1,4}(\.\d{1})?$/',
          'target_weight' => 'required|numeric|regex:/^\d{1,4}(\.\d{1})?$/',
        ];
    }

    public function messages()
    {
        return [
            'current_weight.required' => '現在の体重を入力してください',
            'current_weight.numeric' => '現在の体重は数字で入力してください',
            'current_weight.regex' => '現在の体重は4桁までの数字で小数点は1桁で入力してください',

            'target_weight.required' => '目標の体重を入力してください',
            'target_weight.numeric' => '目標の体重は数字で入力してください',
            'target_weight.regex' => '目標の体重は4桁までの数字で小数点は1桁で入力してください',
        ];
    }
}
