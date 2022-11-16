<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class MatlamatSdg extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    use HasFactory;


    public $table = 'matlamat_sdgs';
    protected $guarded = [''];

    public function sdg()
    {
        return $this->belongsTo(Sdg::class, 'sdg_id');
    }
}
