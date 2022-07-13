<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;

    public $table = 'milestones';

    protected $guarded = ['id'];


    // protected $fillable = [

    //     'namaMilestone',
    //     'remark',
    //     'year',
    //     'quarter',
    //     'actual_mark',
    //     'achievement',

    //     'kpi_id',
    //     'national_id',
    //     'thrust_id',
    //     'key_id',
    //     'sub_id',
    //     'user_id',
    // ];

    // protected $with = [
    //     'user',
    //     'thrust',
    //     'key',
    //     'sub',
    //     'national',
    //     'kpi2',


    // ];


    public function kpi()
    {
        return $this->belongsTo(Kpi2::class, 'kpi_id');
    }

    public function national()
    {
        return $this->belongsTo(National::class, 'national_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function thrust()
    {
        return $this->belongsTo(Thrust::class, 'thrust_id');
    }

    public function key()
    {
        return $this->belongsTo(Key::class, 'key_id');
    }

    public function sub()
    {
        return $this->belongsTo(Sub::class, 'sub_id');
    }
}
