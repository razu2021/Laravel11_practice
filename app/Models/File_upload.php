<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class File_upload extends Model
{
     use SoftDeletes,HasFactory; 

    protected $fillable = [
        'file_id',
        'file_title',
        'file_name',
        'slgu',
        'post_status',
        'status', 
    ];
}
