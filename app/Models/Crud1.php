<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud1 extends Model {
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
    ];
}
