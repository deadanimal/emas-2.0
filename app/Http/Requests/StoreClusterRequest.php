<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClusterRequest extends FormRequest
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
            'namaCluster' => [
                'string',
                'required',
            ],

            'desc' => [
                'string',
                'required',
            ],

            'strategies_id' => [
                'string',
            ],

            'user_id' => [
                'string',
            ],
        ];
    }
}
