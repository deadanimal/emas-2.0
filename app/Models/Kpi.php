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
        'user_id',
    ];

    protected $with = [
        'user',
        'outcome'

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function outcome()
    {
        return $this->belongsTo(Outcome::class, 'outcome_id');
    }
}
