<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $table = 'kategoris';

    protected $fillable = [

        'tema_id',
    ];

    protected $with = [
        'tema',

    ];

    public function user()
    {
        return $this->belongsTo(Pemangkindasar::class, 'tema');
    }
}

