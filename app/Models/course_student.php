<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course_student extends Model
{
    //
    protected $primaryKey = 'id';

    protected $fillable = [
        'student_uniuqe_id',
        'course_unique_id',
    ];
}
