<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemacu extends Model
{
    use HasFactory;

    public $table = 'pemacus';

    protected $fillable = [

        'keteranganBab',
        'user_id',
    ];

    protected $with = [
        'user',
        'bab',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bab()
    {
        return $this->belongsTo(Bab::class, 'bab_id');
    }
}
