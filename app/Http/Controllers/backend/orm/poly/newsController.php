<?php

namespace App\Http\Controllers\backend\orm\poly;

use App\Http\Controllers\Controller;
use App\Models\newse;
use Illuminate\Http\Request;
use App\Models\teacher;

class newsController extends Controller
{
    
    public function index(){
        $all = newse::get();
        return view('backend.orm.studentinfo.newse.index',compact('all'));
    }

    public function add(){
        $all = Teacher::get(); 

        return view('backend.orm.studentinfo.newse.add',compact('all'));
    }
    public function view(){
        return view('backend.orm.studentinfo.newse.view');
    }
    public function edit(){
        return view('backend.orm.studentinfo.newse.edit');
    }




    public function insert(Request $request){
       // dd($request);
        $insert = newse::create([
            'news_title' => $request->news_title,
            'news_desc' => $request->news_desc,
        ]);

        $insert->image()->create([
            'image_url' => 'image.png',
        ]);

    if ($insert) {
        flash()->success('Your Information Submited !');
    } else {
        flash()->error('Your Information submitted Faield !.');
    }
    return redirect()->back();
    


    }





}
