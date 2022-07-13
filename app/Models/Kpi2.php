<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kpi2 extends Model
{
    use HasFactory;

    public $table = 'kpi2s';

    protected $guarded = ['id'];

    // protected $with = [
    //     'user',
    //     'thrust',
    //     'key',
    //     'sub',
    //     'national',


    // ];


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
