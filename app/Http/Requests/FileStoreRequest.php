<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileStoreRequest extends FormRequest
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
            'title' => 'required|unique:posts|max:255',
            'foto' => 'required|mimes:pdf,png,jpg|max:2000'
        ];
    }

    public function messages()
    {
        return [
            'foto.required' => 'Please upload an image',
            'foto.mimes' => 'Only jpeg,png and bmp images are allowed',
            'foto.max' => 'Sorry! Maximum allowed size for an image is 20MB',
        ];
    }
}
