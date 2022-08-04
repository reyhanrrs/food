<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //this comment
    use HasFactory;

    protected $table = 'user';

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
}
