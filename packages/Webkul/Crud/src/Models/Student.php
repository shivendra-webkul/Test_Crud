<?php

namespace Webkul\Crud\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'gender',
        'date_of_birth',
        'full_address',
        'status',
        'password',
    ];
}