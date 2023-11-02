<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'ktp', 'address', 'mobile_phone', 'date_of_birth'
    ];
}
