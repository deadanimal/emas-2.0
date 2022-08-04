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
}
