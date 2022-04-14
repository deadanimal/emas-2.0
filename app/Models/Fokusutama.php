<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fokusutama extends Model
{
    use HasFactory;

    public $table = 'fokusutamas';

    protected $fillable = [

        'keteranganFokus',
        'user_id',
    ];

    protected $with = [
        'user',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
