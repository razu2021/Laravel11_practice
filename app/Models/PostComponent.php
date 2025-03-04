<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComponent extends Model
{
    
    protected $primaryKey= 'id';

    protected $guarded = [];



    public function creator()
    {
        return $this->belongsTo(User::class, 'creator', 'id');
    }
}
