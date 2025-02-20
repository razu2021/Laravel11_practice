<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    protected $filable = [
        'student_id',
        'slug',
        'status',
        'post_status',
        'post_status',
        'creator',
        'editor',
    ];

    protected $primaryKey = 'student_id'; // Custom primary key



/**-------  join all table relationship ---- */
public function student_contact(){
    return $this->hasOne(StudentContact::class,'student_unique_id','student_id');
}

/** one to many relationship  */
public function student_hobby(){
    return $this->hasMany(studentHobby::class,'student_unique_id','student_id');
}


/** many to many relationship  */

public function courses()
{
    return $this->belongsToMany(Course::class, 'course_students', 'student_uniuqe_id','course_unique_id');
}






//-------------
}
