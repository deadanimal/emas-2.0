<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProgramRequest extends FormRequest
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
            'namaProgram' => [
                'string',
                'required',
            ],

            'programLead' => [
                'string',
                'required',
            ],

            'programTarget' => [
                'string',
                'required',
            ],

            'leadAgency' => [
                'string',
                'required',
            ],

            'progress' => [
                'string',
                'required',
            ],

            'cost' => [
                'string',
                'required',
            ],

            'source' => [
                'string',
                'required',
            ],

            'totalDisbursed' => [
                'string',
                'required',
            ],

            'totalAmount' => [
                'string',
                'required',
            ],

            'initiative_id' => [
                'string',
            ],

            'user_id' => [
                'string',
            ],
        ];
    }
}
