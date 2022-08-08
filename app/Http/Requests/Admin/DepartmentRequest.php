<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
            'name' => 'required|max:255',
            'thumbnail' => [
                'nullable', 'file', 'max:1024',
            ],
        ];
    }

    public function messages()
    {
        return [
            'thumbnail.max' => "Maximum file size to upload is 8MB (1024 KB). If you are uploading a photo, try to reduce its resolution to make it under 1MB"
        ];
    }
}
