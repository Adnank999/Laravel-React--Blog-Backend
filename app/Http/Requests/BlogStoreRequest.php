<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if (request()->isMethod('post')) {
            return [
                // 'user_id' => 'required|string',
                // 'user_name' => 'required|string|max:258',
                'title' => 'required|string',
                'description' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'thumbnail' => 'required|string',
                'meta_description' => 'required|string',
                'meta_title' => 'required|string',
                'meta_keywords' => 'required|string'
            ];

            // 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        } else {
            return [
                'user_id' => 'required|string',
                'user_name' => 'required|string|max:258',
                'title' => 'required|string',
                'description' => 'required|text',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'thumbnail' => 'required|string',
                'meta_description' => 'required|string',
                'meta_title' => 'required|string',
                'meta_keywords' => 'required|string'
            ];
        }
    }
}
