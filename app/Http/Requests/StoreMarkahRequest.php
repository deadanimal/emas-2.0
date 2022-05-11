<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMarkahRequest extends FormRequest
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

            'user_id' => [
                'string',
            ],

            'bidang_id' => [
                'string',
            ],

            'user_id' => [
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
                'required',
            ],

            'unitUkuran' => [
                'string',
                'required',
            ],

            'sasaran' => [
                'string',
                'required',
            ],

            'hadToleransi' => [
                'string',
                'required',
            ],

            'wajaran' => [
                'string',
                'required',
            ],

            'tahunAsas' => [
                'string',
                'required',
            ],

            'sumberData' => [
                'string',
                'required',
            ],

            'sumberPengesahan' => [
                'string',
                'required',
            ],

            'namaKpi' => [
                'string',
                'required',
            ],

            'prestasiKpi' => [
                // 'string',
                // 'required',
            ],

            'pencapaian' => [
                'string',
                'required',
            ],

            'peratusPencapaian' => [
                'string',
                'required',
            ],

            'peratusPencapaianAsas' => [
                'string',
                'required',
            ],

            'sasaran2021' => [
                'string',
                'required',
            ],

            'sasaran2022' => [
                'string',
                'required',
            ],

            'sasaran2023' => [
                'string',
                'required',
            ],

            'sasaran2024' => [
                'string',
                'required',
            ],

            'sasaran2025' => [
                'string',
                'required',
            ],


        ];
    }
}
