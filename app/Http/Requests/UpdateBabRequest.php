<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBabRequest extends FormRequest
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
            'keteranganBab' => [
                'string',
                'required',
            ],

            'namaBab' => [
                'string',
                'required',
            ],

            'noBab' => [
                'string',
                'required',
            ],

            'pemangkin_id' => [
                'required',
            ],

            'user_id' => [
                'string',
            ],

            'fokus_id' => [
                'required',
            ],

            'bahagian' => [
                'required',
            ],
        ];
    }
}
