<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateBrandRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name_mm' => 'required',
            'name_en' => 'required'
        ];
    }
}
