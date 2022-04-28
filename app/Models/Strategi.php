<?php

namespace App\Models;

use App\Http\Controllers\BidangController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strategi extends Model
{
    use HasFactory;

    public $table = 'strategis';

    protected $fillable = [

        'keteranganStrategi',
        'user_id',
        'bidang_id',

    ];

    protected $with = [
        'user',
        'bidang'

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }
}
