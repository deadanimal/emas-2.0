<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Kategori_bulanan extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    use HasFactory;

    public $table = 'kategori_bulanans';

    protected $guarded = [''];

    public function pendapatan()
    {
        return $this->belongsTo(Profil::class, 'profil_id');
    }
}
