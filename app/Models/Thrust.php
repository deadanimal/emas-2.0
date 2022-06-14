<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thrust extends Model
{
    use HasFactory;

    public $table = 'thrusts';

    protected $fillable = [

        'namaThrust',
        'keteranganThrust',
        'user_id',
    ];

    protected $with = [
        'user',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
