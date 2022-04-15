<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkarautama extends Model
{
    use HasFactory;

    public $table = 'perkarautamas';

    protected $fillable = [

        'keteranganPerkaraUtama',
        'fokus_id',
        'user_id',
    ];

    protected $with = [
        'user',
        'fokus'

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function fokus()
    {
        return $this->belongsTo(Fokusutama::class, 'fokus_id');
    }
}
