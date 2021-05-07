<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class joinus extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'address',
        'address2',
        'country',
        'state',
        'zip',
        'city',
        'age',
        'imageaddress',
        'designation'
    ];
}
