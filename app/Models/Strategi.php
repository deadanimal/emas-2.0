<?php

namespace App\Models;

use App\Http\Controllers\BidangController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Strategi extends Model implements Auditable
{

    use \OwenIt\Auditing\Auditable;
    use HasFactory;


    public $table = 'strategis';

    protected $guarded = ['id'];

    // protected $fillable = [

    //     'keteranganStrategi',
    //     'namaStrategi',
    //     'user_id',
    //     'bidang_id',

    // ];

    // protected $with = [
    //     'user',
    //     'bidang'

    // ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }
}
