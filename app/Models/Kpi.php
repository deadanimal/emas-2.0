<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kpi extends Model
{
    use HasFactory;

    public $table = 'kpis';

    protected $fillable = [

        'keteranganKpi',
        'namaKpi',
        'outcome_id',
        'pemangkin_id',
        'user_id',
        'bab_id',
        'bidang_id',

        'jenisKpi',
        'unitUkuran',
        'sasaran',
        'hadToleransi',
        'wajaran',
        'tahunAsas',
        'sumberData',
        'sumberPengesahan',
        'namaKpi',
        'prestasiKpi',
        'pencapaian',
        'hadVarian',
        'kekerapan',
        'peratusPencapaian',
        'peratusPencapaianAsas',
        'sasaran2021',
        'sasaran2022',
        'sasaran2023',
        'sasaran2024',
        'sasaran2025',


    ];

    protected $with = [
        'user',
        'pemangkin',
        'bab',
        'outcome',
        'bidang',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pemangkin()
    {
        return $this->belongsTo(Pemangkindasar::class, 'pemangkin_id');
    }

    public function bab()
    {
        return $this->belongsTo(Bab::class, 'bab_id');
    }

    public function outcome()
    {
        return $this->belongsTo(Outcome::class, 'outcome_id');
    }

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }
}
