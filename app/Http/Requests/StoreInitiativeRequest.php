<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInitiativeRequest extends FormRequest
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
            'namaInitiative' => [
                'string',
                'required',
            ],

            'target' => [
                'string',
                'required',
            ],

            'code' => [
                'string',
                'required',
            ],

            'phase' => [
                'required',
            ],

            'leadAgency' => [
                'string',
                'required',
            ],

            'cluster_id' => [
                'string',
            ],

            'user_id' => [
                'string',
            ],

            'national' => [
                'string',
                'required',
            ],

            'responsible_user' => [
                'string',
                'required',
            ],
        ];
    }
}
