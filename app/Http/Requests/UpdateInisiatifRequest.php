<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInisiatifRequest extends FormRequest
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
            'keteranganInisiatif' => [
                'string',
            ],

            'namaInisiatif' => [
                'string',
                'required',
            ],

            'strategi_id' => [
                'string',
            ],

            'user_id' => [
                'string',
            ],

            'fokus_id' => [
                'required',
            ],

            'perkara_id' => [
                'required',
            ],

            'pemangkin_id' => [
                'required',
            ],

            'bab_id' => [
                'required',
            ],

            'bidang_id' => [
                'required',
            ],
        ];
    }
}
