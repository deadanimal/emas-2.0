<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Permission\Traits\HasRoles;



class Pengguna extends Model implements Auditable
{

    use \OwenIt\Auditing\Auditable;

    use HasFactory;
    use HasRoles;


    protected $guarded = ['id'];
}
