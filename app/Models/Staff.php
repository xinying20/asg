<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model {

    use HasFactory;

    protected $primaryKey='staffID';
    
    protected $fillable = [
        'staffID',
        'staffName',
        'staffIC',
        'phone',
        'address',
        'status',
        'email',
        'token',
        'password'
    ];

}
