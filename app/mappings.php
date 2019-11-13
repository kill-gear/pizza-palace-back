<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mappings extends Model
{
    protected $fillable = ['p_id', 'quantity', 'o_id'];
    public $timestamps = false;
}
