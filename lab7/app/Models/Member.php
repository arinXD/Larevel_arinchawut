<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class Member extends Authenticatable
class Member extends Model
{
    use HasFactory;
    
    public function phone()
    {
        return $this->hasOne(Phone::class);
    }
}
