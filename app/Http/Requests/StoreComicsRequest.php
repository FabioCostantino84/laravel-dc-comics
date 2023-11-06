<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:50',
            'price' => 'required',
            'thumb' => 'nullable|image|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => '👉 Inserisci un titolo per il nuovo Comic',
            'title.min:3' => '👉 Inserisci un titolo di almeno 3 caratteri per il nuovo Comic',
            'title.max:50' => '👉 Inserisci un titolo di massimo 50 caratteri per il nuovo Comic',
            'price.required' => '👉 Inserisci il prezzo del nuovo Comic',
            'thumb.max:100' => '👉 La tua immagine inserita del nuovo Comic e troppo grande, assicurati che sia inferiore a 100Kb',
        ];
    }
}
