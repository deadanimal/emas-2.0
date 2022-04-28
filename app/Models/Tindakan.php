<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    use HasFactory;

    public $table = 'tindakans';

    protected $fillable = [

        'keteranganTindakan',
        'user_id',
        'inisiatif_id',
        'perkara_id',

    ];

    protected $with = [
        'user',
        'inisiatif',
        'perkara',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function inisiatif()
    {
        return $this->belongsTo(Inisiatif::class, 'inisiatif_id');
    }

    public function perkara()
    {
        return $this->belongsTo(Perkarautama::class, 'perkara_id');
    }
}
