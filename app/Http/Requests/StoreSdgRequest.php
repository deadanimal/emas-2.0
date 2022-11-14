<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSdgRequest extends FormRequest
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
            'keteranganSdg' => [
                'string',
            ],

            'namaSdg' => [
                'string',
                'required',
            ],

            'pemangkin_id' => [
                'string',
            ],

            'user_id' => [
                'string',
            ],

            'fokus_id' => [
                'string',
            ],

            'perkara_id' => [
                'string',
            ],
        ];
    }
}
