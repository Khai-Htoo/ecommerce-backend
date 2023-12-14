<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreate extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name_mm' =>'required|unique:categories,name_mm',
            'name_en' => 'required|unique:categories,name_en',
            'image' => 'required|mimes:png,jpg,webp,jpeg'
        ];
    }
}
