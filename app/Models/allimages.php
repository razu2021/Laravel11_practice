<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class allimages extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = [];


    public function imageable(){
        $this->morphTo();
    }
}
