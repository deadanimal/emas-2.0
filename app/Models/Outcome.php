<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    use HasFactory;

    public $table = 'outcomes';

    protected $fillable = [

        'keteranganOutcome',
        'namaOutcome',
        'bidang_id',
        'user_id',
    ];

    protected $with = [
        'user',
        'bidang',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'bab_id');

    }
}
