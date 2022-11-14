<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTindakanRequest extends FormRequest
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
            'keteranganTindakan' => [
                'string',
            ],

            'namaTindakan' => [
                'string',
                'required',
            ],

            'user_id' => [
                'string',
            ],

            'inisiatif_id' => [
                'string',
            ],

            'kementerian_penyelaras' => [
                'string',
            ],

            'bahagian' => [
                'string',
            ],

            'kementerian_pelaksana' => [
                'string',
            ],

            'tempohSiap' => [
                'string',
            ],

            'kategoriSasaran' => [
                'string',
            ],

            'statusPelaksanaan' => [
                'string',
            ],

            'catatan2022' => [
                'string',
            ],

            'sasaran2022' => [
                'string',
            ],

            'pencapaian2022' => [
                'string',
            ],

            'catatan2021' => [
                'string',
            ],

            'sasaran2021' => [
                'string',
            ],

            'statusPelaksanaan2021' => [
                'string',
            ],

            'fokus_id' => [
                'required',
            ],

            'perkara_id' => [
                'required',
            ],

            'pemangkin_id' => [
                'required',
            ],

            'bab_id' => [
                'required',
            ],

            'bidang_id' => [
                'required',
            ],

            'strategi_id' => [
                'required',
            ],
        ];
    }
}
