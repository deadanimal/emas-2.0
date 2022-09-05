<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negeri extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function daerah()
    {
        return $this->hasMany(Daerah::class);
    }

    public function kampung()
    {
        return $this->hasMany(Kampung::class);
    }
}
