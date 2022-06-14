<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    use HasFactory;

    public $table = 'subs';

    protected $fillable = [

        'namaSub',
        'keteranganSub',
        'key_id',
        'user_id',
    ];

    protected $with = [
        'user',
        'key'

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function key()
    {
        return $this->belongsTo(Key::class, 'key_id');
    }
}
