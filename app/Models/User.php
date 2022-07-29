<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //this comment
    use HasFactory;

    protected $table = 'user';

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
}
