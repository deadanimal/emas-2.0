<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSectoralRequest extends FormRequest
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
            'namaSectoral' => [
                'string',
                'required',
            ],

            'desc' => [
                'string',
                // 'required',
            ],

            'category' => [
                'string',
                'required',
            ],

            'user_id' => [
                'string',
            ],
        ];
    }
}
