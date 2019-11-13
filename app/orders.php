<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = ['name', 'email', 'address', 'payment_reference', 'status', 'total'];
    public $timestamps = false;
}
