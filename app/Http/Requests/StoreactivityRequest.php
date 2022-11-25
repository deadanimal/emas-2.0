<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreactivityRequest extends FormRequest
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
            'namaActivity' => [
                'string',
            ],

            'startDate' => [
                'string',
            ],

            'endDate' => [
                'string',
            ],

            'output' => [
                'string',
            ],

            'weightage' => [
                'string',
            ],

            'weightage_progress' => [
                'string',
            ],

            'output_progress' => [
                'string',
            ],

            'additionalOutput' => [
                'string',
            ],

            'remarks' => [
                'string',
            ],

            'leadAgency' => [
                'string',
            ],

            'document_pdf' => [
                'string',
            ],

            'initiative_id' => [
                'string',
            ],

            'user_id' => [
                'string',
            ],

            'cluster_id' => [
                'string',
            ],

            'program_id' => [
                'string',
            ],

            'plan_id' => [
                'string',
            ],

            'PIC' => [
                'string',
            ],

            'unit' => [
                'string',
            ],
        ];
    }
}
