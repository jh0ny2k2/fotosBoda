<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bebida extends Model
{
    /** @use HasFactory<\Database\Factories\BebidaFactory> */
    use HasFactory;

    protected $fillable = [
        'bebida',
    ];
}
