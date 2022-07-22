<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Outcome extends Model implements Auditable
{

    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'outcomes';

    protected $guarded = ['id'];


    // protected $fillable = [

    //     'keteranganOutcome',
    //     'namaOutcome',
    //     'bidang_id',
    //     'user_id',
    // ];

    // protected $with = [
    //     'user',
    //     'bidang',

    // ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'bab_id');
    }
}
