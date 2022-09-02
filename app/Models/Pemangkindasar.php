<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Pemangkindasar extends Model implements Auditable
{

    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'pemangkindasars';

    protected $guarded = ['id'];


    // protected $fillable = [

    //     'keteranganTema',
    //     'namaTema',
    //     'kategori_id',
    //     'fokus_id',
    //     'perkara_id',
    //     'user_id',
    // ];

    // protected $with = [
    //     'user',
    //     'fokus',
    //     'perkara',
    //     'kategori',


    // ];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function fokus()
    {
        return $this->belongsTo(Fokusutama::class, 'fokus_id');
    }

    public function perkara()
    {
        return $this->belongsTo(Perkarautama::class, 'perkara_id');
    }
}
