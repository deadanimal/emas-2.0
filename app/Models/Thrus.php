<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thrus extends Model
{
    use HasFactory;

    public $table = 'thruses';

    protected $guarded = ['id'];
}
