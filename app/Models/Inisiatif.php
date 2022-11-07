<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Inisiatif extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    use HasFactory;

    public $table = 'inisiatifs';

    protected $guarded = ['id'];


    // protected $fillable = [

    //     'keteranganInisiatif',
    //     'namaInisiatif',
    //     'strategi_id',
    //     'user_id',
    // ];

    // protected $with = [
    //     'user',
    //     'strategi',

    // ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function strategi()
    {
        return $this->belongsTo(Strategi::class, 'strategi_id');
    }
}
