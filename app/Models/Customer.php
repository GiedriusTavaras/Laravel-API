<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'last_name', 'address', 'password'];

    public function emails()
    {
        return $this->hasMany('App\Models\Email');
    }
}

