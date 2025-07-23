<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'Name',
        'Age',
        'Email',
        'Phone',
        'School',
        'Sex',
        'English_Level',
        'Campus',
        'Terms'
    ];
}
