<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Profil extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    use HasFactory;

    public $table = 'profils';

    protected $guarded = ['id'];

    protected $with = [
        'kategori',

    ];

    public function kategori()
    {
        return $this->belongsTo(Profil_kategori::class, 'kategori_id');
    }
}
