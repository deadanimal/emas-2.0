<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class National extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    use HasFactory;


    public $table = 'nationals';

    protected $fillable = [

        'namaNational',
        'keteranganNational',
        'year',
        'quarter',
        'thrust_id',
        'user_id',
    ];

    protected $with = [
        'user',
        'thrust'

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function thrust()
    {
        return $this->belongsTo(Thrust::class, 'thrust_id');
    }
}
