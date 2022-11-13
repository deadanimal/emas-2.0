<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class KpiMarkah extends Model  implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    use HasFactory;


    public $table = 'kpi_markahs';
    protected $guarded = [''];

    public function kpi()
    {
        return $this->belongsTo(Kpi::class, 'kpi_id');
    }
}
