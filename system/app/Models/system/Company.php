<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
    public $table = "companies";
    use HasFactory;

    protected $guarded = [];
}
