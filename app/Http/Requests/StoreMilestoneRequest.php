<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMilestoneRequest extends FormRequest
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
            'namaMilestone' => [
                'string',
                // 'required',
            ],

            'remark' => [
                'string',
                'required',
            ],

            'year' => [
                'string',

            ],

            'quarter' => [
                'string',
            ],

            'achievement' => [
                'string',

            ],

            'actual_mark' => [
                'string',
            ],

            'kpi_id' => [
                'string',
            ],

            'thrust_id' => [
                'string',

            ],

            'user_id' => [
                'string',
            ],

            'national_id' => [
                'string',

            ],

            'key_id' => [
                'string',
            ],

            'sub_id' => [
                'string',
            ],

            'approver_remark' => [
                'string',
            ],

            'baseline' => [
                'string',
                'required',

            ],

            'national' => [
                'string',
                'required',

            ],

            'target' => [
                'string',
                'required',

            ],



        ];
    }
}
