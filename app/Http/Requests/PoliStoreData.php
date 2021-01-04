<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PoliStoreData extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nm_poli' => ['required'],
            'lantai' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'nm_poli.required' => 'Poli name is required.',
            'lantai.required' => 'Input potition Poli.',
        ];
    }
}
