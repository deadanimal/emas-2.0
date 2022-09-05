<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Kampung extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    use HasFactory;

    public $table = 'kampungs';

    protected $guarded = ['id'];
}
