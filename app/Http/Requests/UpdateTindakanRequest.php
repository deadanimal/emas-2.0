<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTindakanRequest extends FormRequest
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
            'keteranganTindakan' => [
                'string',
                'required',
            ],

            'namaTindakan' => [
                'string',
                'required',
            ],

            'user_id' => [
                'string',
            ],

            'inisiatif_id' => [
                'string',
            ],

            'perkara_id' => [
                'string',
            ],
        ];
    }
}
