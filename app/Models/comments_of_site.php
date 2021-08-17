<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments_of_site extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'text',
        'date',
        'time',
    ];
}
