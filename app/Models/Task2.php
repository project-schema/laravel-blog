<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task2 extends Model {
    use HasFactory;
    protected $fillable = [
        "name",
        "age",
        "address",
        "location",
    ];
}
