<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class newse extends Model
{
  protected $primaryKey= 'id';

  protected $guarded = [];

  public function image(){
   return  $this->morphOne(allimages::class,'imageable');
  }



  
}
