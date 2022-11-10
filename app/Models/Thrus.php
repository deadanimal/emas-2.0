<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Thrus extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'thruses';

    protected $guarded = ['id'];

    public function cluster()
    {
        return $this->belongsTo(Cluster::class, 'cluster_id');
    }

    public function category()
    {
        return $this->hasMany(Cluster::class);
    }
}
