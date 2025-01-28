<?php

namespace App\Http\Controllers\backend\orm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studentController extends Controller
{
  public function index(){
     return view('backend.orm.studentinfo.student.index');
  }
}
