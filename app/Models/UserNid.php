<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserNid extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'Nid_id',
        'nid_number',
        'slug',
        'creator',
        'editor',
        'post_status',
        'status', 
    ];
}
