<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    public $table = 'bidangs';

    protected $fillable = [

        'keteranganBidang',
        'namaBidang',
        'bab_id',
        'pemacu_id',
        'user_id',
    ];

    protected $with = [
        'user',
        'bab',
        'pemacu',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bab()
    {
        return $this->belongsTo(Bab::class, 'bab_id');

    }

    public function pemacu()
    {
        return $this->belongsTo(Pemacu::class, 'bab_id');
    }
}
