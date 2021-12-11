<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tegRequest extends FormRequest
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
            'teg' => 'required|min:3|max:100',
            'text' => 'required|min:30|max:150'
        ];
    }

    public function attributes()
    {
        return [
            'teg' => 'Тег',
            'text' => 'Описание'
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'Поле :attribute является обязательным',
            'text.min' => 'Минимальное количество символов в поле :attribute 30',
            'text.max' => 'Максимальное количество символов в поле :attribute 150',
            'teg.min' => 'Минимальное количество символов в поле :attribute 3',
            'teg.max' => 'Максимальное количество символов в поле :attribute 30'
        ];
    }
}
