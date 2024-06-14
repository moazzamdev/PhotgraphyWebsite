<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    use HasFactory;

    protected $table = 'photographers';
    protected $fillable = [
        'name',
        'phone',
        'address',
        'email',
        'portfolio_link',
    ];
}

