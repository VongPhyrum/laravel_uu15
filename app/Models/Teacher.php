<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'teacherName',
        'gender',
        'DOB',
        'salary',
        'subject',
        'phoneNumber',
        'group',
    ];
}
