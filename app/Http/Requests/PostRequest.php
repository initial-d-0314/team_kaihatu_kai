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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
        public function rules()
    {
        return [
            'post.title' => 'required|string|max:255',
            'post.body' => 'required|string|max:10000',
            'post.image_url' =>'nullable|string',
            'post.date' => 'date|after:today',
            'post.user_id' => 'required',
        ];
    }
}
