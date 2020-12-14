<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'customer_id'];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}
