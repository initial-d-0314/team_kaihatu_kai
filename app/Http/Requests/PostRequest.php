<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
        public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:10000',
            'image_url' =>'nullable|string'
            'date' => 'required|date|after_or_equal:' . today()->format('Y-m-d'),
        ];
    }

    public function messages()
    {
        return [
            'full_date.after_or_equal' => '未来の日付を入力してください。',
        ];
    }
}
