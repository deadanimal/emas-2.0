<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kpi extends Model
{
    use HasFactory;

    public $table = 'kpis';

    protected $guarded = ['id'];
 

    protected $with = [
        'user',
        'pemangkin',
        'bab',
        'outcome',
        'bidang',
        'fokus',
        'perkara',

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

    public function fokus()
    {
        return $this->belongsTo(Fokusutama::class, 'fokus_id');
    }

    public function perkara()
    {
        return $this->belongsTo(Perkarautama::class, 'perkara_id');
    }
}
