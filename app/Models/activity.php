<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class activity extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'activities';

    protected $guarded = ['id'];

    public function cluster()
    {
        return $this->belongsTo(Cluster::class, 'cluster_id');
    }

    public function initiative()
    {
        return $this->belongsTo(Initiative::class, 'initiative_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
