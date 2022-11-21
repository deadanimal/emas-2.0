<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Organisasi extends Model implements Auditable
{

    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'organisasis';

    protected $guarded = ['id'];


    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }

}
