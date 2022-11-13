<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class TindakanMarkah extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    use HasFactory;

    public $table = 'tindakan_markahs';

    protected $guarded = [''];

    public function tindakan()
    {
        return $this->belongsTo(Tindakan::class, 'tindakan_id');
    }
}
