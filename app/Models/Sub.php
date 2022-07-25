<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Sub extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
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
