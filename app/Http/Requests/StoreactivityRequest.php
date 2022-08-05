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
                'required',
            ],

            'startDate' => [
                'string',
                'required',
            ],

            'endDate' => [
                'string',
                'required',
            ],

            'output' => [
                'string',
                'required',
            ],

            'weightage' => [
                'string',
                'required',
            ],

            'weightage_progress' => [
                'string',
                'required',
            ],

            'output_progress' => [
                'string',
                'required',
            ],

            'additionalOutput' => [
                'string',
                'required',
            ],

            'remarks' => [
                'string',
                'required',
            ],

            'leadAgency' => [
                'string',
                'required',
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
        ];
    }
}
