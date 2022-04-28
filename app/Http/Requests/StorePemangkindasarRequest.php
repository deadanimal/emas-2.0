<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePemangkindasarRequest extends FormRequest
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
            'keteranganTema' => [
                'string',
                'required',
            ],

            'kategori_id' => [
                'string',

            ],

            'keteranganTema' => [
                'string',
                'required',
            ],

            'perkara_id' => [
                'string',
            ],

            'focus_id' => [
                'string',

            ],

            'user_id' => [
                'string',
            ],
        ];
    }
}
