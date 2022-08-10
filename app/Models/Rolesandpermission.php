<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;



class Rolesandpermission extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    use HasFactory;

    protected $table = 'role_has_permissions';

    protected $primaryKey = 'id';
}
