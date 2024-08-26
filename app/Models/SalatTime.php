<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalatTime extends Model
{
    use HasFactory;
    protected $fillable = ['salat','time'];
    protected $table = 'salat_times';
}
