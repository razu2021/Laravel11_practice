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


/**-------  join all table relationship ---- */

public function student_contact(){
    return $this->hasOne(StudentContact::class);
}







//-------------
}
