<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest{
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
            'name' => 'required',
            'author' => 'required',
            'quotes' => 'required | min:5 | max:500',
            'tags' => 'required | min:15 | max:500'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Поле имя является обязательным',
            'author.required' => 'Поле автор является обязательным',
            'quotes.required' => 'Поле цытата является обязательным',
            'tags.required' => 'Поле теги является обязательным'
        ];
    }
}
