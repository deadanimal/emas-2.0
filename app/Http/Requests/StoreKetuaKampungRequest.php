<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKetuaKampungRequest extends FormRequest
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

            'name' => [
                'string',
                'required',
            ],

            'no_pejabat' => [
                'string',
                'required',
            ],

            'tahun_mula' => [
                'string',
                'required',

            ],

            'tahun_akhir' => [
                'string',
                'required',
            ],

            'no_kp' => [
                'string',
                'required',
            ],

            'no_telefon' => [
                'string',
                'required',

            ],

            'kampung_id' => [
                'string',
                'required',
            ],

            'daerah_id' => [
                'string',
                'required',
            ],

            'negeri_id' => [
                'string',
                'required',

            ],
        ];
    }
}
