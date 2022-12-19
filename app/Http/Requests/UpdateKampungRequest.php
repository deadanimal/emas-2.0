<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKampungRequest extends FormRequest
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
            'daerah_id' => [
                'string',
                'required',
            ],

            'negeri_id' => [
                'string',
                'required',

            ],

            'namaKampung' => [
                'string',
                'required',
            ],

            'alamat' => [
                'string',
                'required',
            ],

            'maklumat' => [
                'string',
                'required',

            ],
        ];
    }
}
