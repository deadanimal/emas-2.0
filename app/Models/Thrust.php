<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Thrust extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;


    public $table = 'thrusts';

    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function national()
    {
        return $this->belongsTo(National::class, 'national_id');
    }

    public function key()
    {
        return $this->belongsTo(Key::class, 'key_id');
    }
    public function sub()
    {
        return $this->belongsTo(Sub::class, 'sub_id');
    }

    public function kpi()
    {
        return $this->belongsTo(Kpi2::class, 'kpi_id');
    }

    public function milestone()
    {
        return $this->belongsTo(Milestone::class, 'miles_id');
    }
}
