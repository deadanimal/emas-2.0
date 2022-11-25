<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProgramRequest extends FormRequest
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
            ],

            'programLead' => [
                'string',
            ],

            'programTarget' => [
                'string',
            ],

            'leadAgency' => [
                'string',
            ],

            'progress' => [
                'string',
            ],

            'cost' => [
                'string',
            ],

            'source' => [
                'string',
            ],

            'totalDisbursed' => [
                'string',
            ],

            'totalAmount' => [
                'string',
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
