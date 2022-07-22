<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Bidang extends Model implements Auditable
{

    use \OwenIt\Auditing\Auditable;

    public $table = 'bidangs';

    protected $guarded = ['id'];

    // protected $fillable = [

    //     'keteranganBidang',
    //     'namaBidang',
    //     'noBidang',
    //     'bab_id',
    //     'pemacu_id',
    //     'user_id',
    // ];

    // protected $with = [
    //     'user',
    //     'bab',
    //     'pemacu',

    // ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bab()
    {
        return $this->belongsTo(Bab::class, 'bab_id');
    }

    public function pemacu()
    {
        return $this->belongsTo(Pemacu::class, 'bab_id');
    }
}
