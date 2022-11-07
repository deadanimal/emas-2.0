<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;



class Negeri extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    use HasFactory;
    protected $guarded = [''];

    public function daerah()
    {
        return $this->hasMany(Daerah::class);
    }

    public function kampung()
    {
        return $this->hasMany(Kampung::class);
    }
}
