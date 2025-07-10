<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_semester',
        'student_number',
        'lastname',
        'firstname',
        'middlename',
        'suffixname',
        'course',
        'year_level',
        'registration_date',
        'encoder',
    ];

    protected $casts = [
        'registration_date' => 'date',
    ];
}
