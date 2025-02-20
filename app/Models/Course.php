<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    protected $primaryKey = 'course_id';

    protected $guarded=[];


    public function students()
        {
            return $this->belongsToMany(Student::class, 'course_students', 'course_unique_id', 'student_uniuqe_id');
        }


}
