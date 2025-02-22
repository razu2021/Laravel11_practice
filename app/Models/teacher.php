<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $primaryKey = 'teacher_id';
    protected $guarded = [];




    public function TeacherContact(){
        return $this->hasOne(TeacherContact::class, 'teacher_unique_id', 'teacher_id');
    }

    //  bank table 
    public function TeacherBank(){
        return $this->hasOne(Teacher_bank::class, 'teacher_unique_id', 'teacher_id');
    }


}
