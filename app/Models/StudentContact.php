<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentContact extends Model
{
    //

    protected $guarded = [];
    protected $filable = [
        'student_contact_id',
        'student_unique_id',
        'slug',
        'status',
        'post_status',
        'post_status',
        'creator',
        'editor',
    ];



    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
