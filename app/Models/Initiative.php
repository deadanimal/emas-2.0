<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Initiative extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'initiatives';

    protected $guarded = ['id'];

    // protected $casts = [
    //     'phase' => 'array',
    // ];

    public function setPhaseAttribute($value)
    {
        $this->attributes['phase'] = json_encode($value);
    }

    public function getPhaseAttribute($value)
    {
        return $this->attributes['phase'] = json_decode($value);
    }
}
