<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class File_upload extends Model
{
     use SoftDeletes ; 

    protected $fillable = [
        'file_id',
        'file_title',
        'file_name',
        
    ];
}
