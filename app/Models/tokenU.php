<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tokenU extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'token',
        'fecha',
        'super_id'
    ];
}
