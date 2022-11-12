<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBidangRequest extends FormRequest
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
            'keteranganBidang' => [
                'string',
                'required',
            ],

            'namaBidang' => [
                'string',
                'required',
            ],

            'noBidang' => [
                'string',
                'required',
            ],

            'bab_id' => [
                'string',
            ],

            'pemacu_id' => [
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

            'pemangkin_id' => [
                'string',
            ],

            'bahagian' => [
                'string',
            ],
        ];
    }
}
