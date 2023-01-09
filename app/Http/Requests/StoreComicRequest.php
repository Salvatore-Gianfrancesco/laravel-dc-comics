<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|min:5|max:255',
            'description' => 'nullable|min:5|max:10000',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|gt:0',
            'series' => 'nullable|min:5|max:100',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:100'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere lungo almeno 5 caratteri',
            'title.max' => 'Il titolo deve essere lungo massimo 255 caratteri',
            'description.min' => 'La descrizione deve essere lunga almeno 5 caratteri',
            'description.max' => 'La descrizione deve essere lunga massimo 10.000 caratteri',
            'thumb.max' => 'L\'url dell\'immagine deve essere lunga massimo 255 caratteri',
            'price.gt' => 'Il prezzo deve essere maggiore di 0',
            'series.min' => 'La serie deve essere lunga almeno 5 caratteri',
            'series.max' => 'La serie deve essere lunga massimo 100 caratteri',
            'sale_date.date' => 'La data non è nel formato corretto',
            'type.max' => 'Il tipo deve essere lungo massimo 100 caratteri'
        ];
    }
}
