<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class university extends Model
{
    protected $primaryKey = 'university_id';
    protected $guarded = [];


    public function teachers(){
        return $this->hasMany(teacher::class ,'university_unique_id','university_id');
    }

    public function TeacherContact(){
        return $this->hasManyThrough(TeacherContact::class,teacher::class,'university_unique_id','teacher_unique_id','university_id','teacher_id');
    }
    //  bank relation 
    public function TeacherBank(){
        return $this->hasManyThrough(Teacher_bank::class,teacher::class,'university_unique_id','teacher_unique_id','university_id','teacher_id');
    }

}
