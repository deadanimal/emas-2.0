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
}
