<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'middle_name', 'mother_name', 'last_name', 'mobile', 'email', 'nationality', 'date_of_birth', 'gender', 'marital_status', 'aadhar_number', 'category', 'course','address'
    ];
}
