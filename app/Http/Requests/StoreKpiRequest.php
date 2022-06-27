<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKpiRequest extends FormRequest
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
            'keteranganKpi' => [
                'string',
                // 'required',
            ],

            'namaKpi' => [
                'string',
                'required',
            ],

            'outcome_id' => [
                'string',
            ],

            'user_id' => [
                'string',
            ],

            'bidang_id' => [
                'string',
            ],

            'pemangkin_id' => [
                'string',
            ],

            'bab_id' => [
                'string',
            ],

            'jenisKpi' => [
                'string',
            ],

            'unitUkuran' => [
                'string',
            ],

            'sasaran' => [
                'string',
            ],

            'hadToleransi' => [
                'string',
            ],

            'wajaran' => [
                'string',
            ],

            'tahunAsas' => [
                'string',
            ],

            'sumberData' => [
                'string',
            ],

            'sumberPengesahan' => [
                'string',
            ],

            'namaKpi' => [
                'string',
            ],

            'prestasiKpi' => [
                // 'string',
                // 'required',
            ],

            'pencapaian' => [
                'string',
            ],

            'peratusPencapaian' => [
                'string',
            ],

            'peratusPencapaianAsas' => [
                'string',
            ],

            'sasaran2021' => [
                'string',
            ],

            'sasaran2022' => [
                'string',
            ],

            'sasaran2023' => [
                'string',
            ],

            'sasaran2024' => [
                'string',
            ],

            'sasaran2025' => [
                'string',
            ],
            'fokusutama_id' => [
                'required',
            ],
            'perkarautama_id' => [
                'required',
            ],
        ];
    }
}
