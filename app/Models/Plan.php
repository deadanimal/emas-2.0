<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Plan extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'plans';

    protected $guarded = ['id'];
}
