<?php

namespace App\Http\Controllers\fileupload;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\File_upload;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class fileUploadController extends Controller
{
   public function index(){
      $alldata = User::with('file_uploads')->with('nidInfo')->get();
     $all = File_upload::get();
     $deletecount = File_upload::onlyTrashed()->count();

    return view ('frontend.fromall.file.index',compact('all','deletecount','alldata'));
   }
   /**======  edit page functionality ======== */
   public function add(){
    return view ('frontend.fromall.file.add');
   }

   /**======  view page functionality ======== */
   public function view(){
    return view ('frontend.fromall.file.view');
   }
   /**======  edit page functionality ======== */
   public function edit($slug){
      $data = File_upload::where('slug',$slug)->firstOrFail();
      return view ('frontend.fromall.file.edit',compact('data'));
   }


   /** ========  insert function strat here =======*/

   public function insert(Request $request){

   /**
    * =============  wiritte your validation code is here 
   */
      $request->validate([
         'image' => 'required',
      ]);

   /**
    * ==============   Get The file ============= */
   
      $file = $request->image;
   
   /**==============   Get The file ============= */


   /**==============   Define  The file name .. ============= */
   /**
    * getClientOriginalName
    * getClientOriginalExtension
    * getSize
    * getMimeType
    * getRealPath
    * extension
    */

    $file_name = Str::random(20) . '_'.mt_rand(10000, 100000).'-'.time().'.'.$file->extension();

   
   /**==============   Define  The file name   ============= */



   /**==============   Define  The file path where you want to save this file  .. ============= */

      $file_directory = 'uploads/images';
      $public_directory = public_path(($file_directory));  // if you want to save file in public folder ! you can do the but need uploads/images folder inside of public folder or

   /**==============   Define  The file path where you want to save this file    ============= */



/**
 * ==============   Uploads your File --------------- using Storage disk -------------
 * --------------------------------------------- Explaination *****
 * 
 * ___local__:  local is a private direcotory . you file upload in storage/app/private/example.text
 * ___Uploads/Image__ : its create a folder inside of private folder .as like storage/app/private/uploads/images/example.text
 * ___Public__ : public is a public driver , your file upload inside of public folder 
 * ___Put__ : put Is a Defualt Method  for Upload image 
 * ___putFile__ : putFile is a automatice Streming . you have learge file . putfile automatic dicrees the file memory size ,
 * ___putFileAs__ : if you want to save your image with custom file name you use this methods .putFileAs have 3 peramitters $file_directory,$file,$filename
 * ___ new File __ : 
 * 
 */

 //$uploaded =  Storage::disk('local')->put('uploads/images', $file); 
 //$uploaded =  Storage::disk('public')->put('uploads/images', $file); 


 //$uploaded =  Storage::disk('public')->putFile($file_directory, new File($file)); // Automatically generate a unique ID for filename...
 //$uploaded =  Storage::disk('public')->putFileAs($file_directory, new File($file),$file_name); // Automatically generate a unique ID for filename...

/**
*|
*|
*| ---- Using stor mehtod for stor image    
*|
*| $file->('file_name')->store('foldername','public or local');
*| ___store__: store method and put mehtod as like same , create auto name ;

 */

   // $uploaded =  $file->store($file_directory,'public');  // create auto name and save this file 
   //$file->storeAs($file_directory,$file_name,'public');  // create a Menual name and save this file  
  // $uploaded =  $file->move($public_directory,new File($file),$file_name);  // if you want to upload file directly public folder .. go with the code .. note check your directory is exist or not ,.,. if not exist create this directory and upload your file




 /*** ==============   Uploads your File ---------------**/

/**==========   store Data in Database ======= */
   $slugs = Str::random(20) . '_'.mt_rand(10000, 100000).'-'.time();
   $creator_id = Auth::User()->id;
 
     $insert=  File_upload::create([
         'file_title' => $request->title,
         'file_name' => $file_name,
         'slug' => $slugs,
         'creator'=> $creator_id,

      ]);

   


/**==========   store Data in Database ======= */



    
  
   
  //$uploaded =  Storage::disk('local')->put('uploads/images', $file); 

   $uploaded =  Storage::disk('public')->putFileAs($file_directory, $file, $file_name); 

   //$uploaded = $file->store('images','public') ; 

   //dd($uploaded);
    if ($insert) {
        flash()->success('Your Information Submited !');
     } else {
        flash()->error('Your Information submitted Faield !.');
     }

     return redirect()->back();
   }








/**----====================  update Data functionality =------------  */
   public function update(Request $request){

      $id = $request->id;  #find id come from form 
      $slug = $request->slug; #find slug for update record 
      $update = File_upload::where('file_id',$id)->where('slug',$slug)->update([
         'file_title'=>$request->title, #text update code 
      ]);

      /**--- Upload new file and ---Delete old file form directory---------  */
      if($request->hasFile('image')){

         /** --- Delete old image form directorys ------  */
         $old_path = File_upload::where('file_id',$id)->where('slug',$slug)->first();
         $file_paths = public_path('storage/uploads/images/'.$old_path->file_name);
         if (file_exists($file_paths)){
             File::delete($file_paths);
             flash()->success('Old File Deleted Successfuly ! ');
         }
         /** --- Delete old image form directorys ------ END --- */

         $file = $request->image; // get file from 
         $file_name = Str::random(20) . '_'.mt_rand(10000, 100000).'-'.time().'.'.$file->extension(); // create custom file name 
         $file_directory = 'uploads/images'; // folder directory 
         Storage::disk('public')->putFileAs($file_directory, $file, $file_name);  // save file in directory 
         
         File_upload::where('file_id',$id)->where('slug',$slug)->update([
            'file_name'=>$file_name, // database upload code 
         ]);
      }
      /**--- Upload new file and ---Delete old file form directory---------  */

      if ($update) {
         flash()->success('Your Information Updated Successfully !');
      } else {
         flash()->error('Your Information Updated Faild !.');
      }
 
      return redirect()->back();

   }



/**----====================  update Data functionality =------------  */










   /**========  soft Delete Functionality ======== */
   public function soft_delete($id){

      $delete = File_upload::where('file_id',$id);
      $delete->delete();

      if ($delete) {
         flash()->success('Your Information Delete Successfuly !');
      } else {
         flash()->error('Your Information Delete Faield !.');
      }
 
      return redirect()->back();
     
   }
   /**========  Restore Data Functionality ======== */
   public function restore($id){

      $restoreData = File_upload::where('file_id',$id);
      $restoreData->restore();

      if ($restoreData) {
         flash()->success(' Data Restore Successfuly !');
      } else {
         flash()->error(' Data Restore  Faield !.');
      }
      return redirect()->back();
     
   }
   /**========  Delete  Data Functionality ======== */
   public function delete($id){

      $deleteData = File_upload::onlyTrashed()->where('file_id', $id)->first();
      
      $file_paths = public_path('storage/uploads/images/'.$deleteData->file_name);

      if (file_exists($file_paths)){
          File::delete($file_paths);
      }

      // Delete the database information
      File_upload::where('file_id', $id)->forceDelete();

      if ($deleteData){
         flash()->success('Delete Data Successfuly !');
      } else {
         flash()->error('Delete Data Request Faield !.');
      }
      return redirect()->back();
     
   }

  



/**--------Recycle blade view -------- */
   public function recycle(){
      $all = File_upload::onlyTrashed()->get();
      return view('frontend.fromall.file.recycle',compact('all'));
   }
/**--------Recycle blade view -------- */



}
