<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'nullable|max:10000',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|gt:0',
            'series' => 'nullable|max:100',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:100'
        ];
    }
}
