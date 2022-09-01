<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKeyRequest extends FormRequest
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
            'keteranganKey' => [
                'string',
                'required',
            ],

            'namaKey' => [
                'string',
                'required',
            ],

            'user_id' => [
                'string',
            ],

            'thrust_id' => [
                'string',
            ],

            'national_id' => [
                'string',
            ],
        ];
    }
}
