<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Sdg extends Model implements Auditable
{

    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'sdgs';

    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pemangkin()
    {
        return $this->belongsTo(Pemangkindasar::class, 'pemangkin_id');
    }
}
