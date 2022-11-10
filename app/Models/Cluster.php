<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Cluster extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'clusters';

    protected $guarded = ['id'];

    public function thrust()
    {
        return $this->hasMany(Thrus::class);
    }

    public function category()
    {
        return $this->hasMany(Thrus::class);
    }
}
