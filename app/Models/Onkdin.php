<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onkdin extends Model {
    use HasFactory;
    protected $fillable = [
        'body',
        'text',
    ];
}
