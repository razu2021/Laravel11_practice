<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'studentid',
        'slug',
        'status',
        'post_status',
        'creator',
        'editor',
    ];

    protected $primaryKey = 'studentid'; // Custom primary key



/**-------  join all table relationship ---- */

public function student_contact(){
    return $this->hasOne(StudentContact::class);
}







//-------------
}
