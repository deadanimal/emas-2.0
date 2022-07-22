<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Fokusutama extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    use HasFactory;

    public $table = 'fokusutamas';

    // protected $fillable = [

    //     'keteranganFokus',
    //     'namaFokus',
    //     'user_id',
    // ];
    protected $guarded = ['id'];

    protected $with = [
        'user',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
