<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class KetuaKampung extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'ketua_kampungs';


    use HasFactory;
    protected $guarded = ['id'];
}
