<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    use HasFactory;

    public $table = 'tindakans';

    protected $fillable = [

        'keteranganTindakan',
        'namaTindakan',
        'user_id',
        'inisiatif_id',
        'perkara_id',
        'kementerian_penyelaras',
        'kementerian_pelaksana',
        'tempohSiap',
        'kategoriSasaran',
        'statusPelaksanaan',
        'catatan2022',
        'sasaran2022',
        'pencapaian2022',
        'catatan2021',
        'sasaran2021',
        'statusPelaksanaan2021'



    ];

    protected $with = [
        'user',
        'inisiatif',
        'perkara',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function inisiatif()
    {
        return $this->belongsTo(Inisiatif::class, 'inisiatif_id');
    }

    public function perkara()
    {
        return $this->belongsTo(Perkarautama::class, 'perkara_id');
    }
}
