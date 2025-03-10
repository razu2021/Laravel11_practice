<?php

use App\Http\Controllers\backend\common\PostComponentController;
use App\Http\Controllers\backend\common\UserContactController;
use App\Http\Controllers\backend\orm\hasonethrow\TeacherContactController;
use App\Http\Controllers\backend\orm\hasonethrow\TeacherController;
use App\Http\Controllers\backend\orm\hasonethrow\universityController;
use App\Http\Controllers\backend\orm\onetomay\StudentHobbyController;
use App\Http\Controllers\backend\orm\poly\newsController;
use App\Http\Controllers\backend\setting\EmailSettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\orm\hasonethrow\TeacherBankController;
use App\Http\Controllers\backend\orm\manytomany\StudentCourseController;
use App\Http\Controllers\backend\orm\studentController;
use App\Http\Controllers\backend\orm\onetoone\StudentcontactController;
use App\Http\Controllers\mail\mailController;

Route::middleware('auth')->group(function(){
    Route::get('admin/dashboard',[dashboardController::class , 'index_dashboard'])->name('dashboard');
/**=======  Dashboard route end here  */


/**=======  
 * 
 * 
 * one to one / hasOne Relationship route 
 * 
 * 
 * ===== */

/**----------- student table route ------------ */
Route::controller(studentController::class)->prefix('student/')->name('student.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}','view')->name('view');
    Route::get('edit','edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::post('course','course')->name('course_submit');



    Route::get('softdelete/{id}','softdelete')->name('softdelete');
    Route::get('restor/{id}','restor')->name('restor');
    Route::get('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
});

/**----------- student table route ------------ */
Route::controller(StudentHobbyController::class)->prefix('student/hobby/')->name('student_hobby.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}','view')->name('view');
    Route::get('edit','edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::get('softdelete/{id}','softdelete')->name('softdelete');
    Route::get('restor/{id}','restor')->name('restor');
    Route::get('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
   
});
Route::controller(StudentCourseController::class)->prefix('student/course/')->name('student_course.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}','view')->name('view');
    Route::get('edit','edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::get('softdelete/{id}','softdelete')->name('softdelete');
    Route::get('restor/{id}','restor')->name('restor');
    Route::get('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
   
});









Route::controller(StudentcontactController::class)->prefix('student-contact/')->name('student_contact.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}','view')->name('view');
    Route::get('edit','edit')->name('edit');
    Route::post('submit','insert')->name('submit');

  
});


/**----------- student table route  has one throw ------------ */
Route::controller(universityController::class)->prefix('university')->name('university.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}','view')->name('view');
    Route::get('edit','edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::get('softdelete/{id}','softdelete')->name('softdelete');
    Route::get('restor/{id}','restor')->name('restor');
    Route::get('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
   
});
/**----------- student table route  has one throw ------------ */
Route::controller(TeacherController::class)->prefix('teacher')->name('teacher.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}','view')->name('view');
    Route::get('edit','edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::get('softdelete/{id}','softdelete')->name('softdelete');
    Route::get('restor/{id}','restor')->name('restor');
    Route::get('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
   
});
/**----------- student table route  has one throw ------------ */
Route::controller(TeacherContactController::class)->prefix('teacher_contact')->name('teacher_contact.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}','view')->name('view');
    Route::get('edit','edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::get('softdelete/{id}','softdelete')->name('softdelete');
    Route::get('restor/{id}','restor')->name('restor');
    Route::get('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
   
});
/**----------- student table route  has one throw ------------ */
Route::controller(TeacherBankController::class)->prefix('teacher_bank')->name('teacher_bank.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}','view')->name('view');
    Route::get('edit','edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::get('softdelete/{id}','softdelete')->name('softdelete');
    Route::get('restor/{id}','restor')->name('restor');
    Route::get('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
   
});



/**----------- student table route  has one throw ------------ */
Route::controller(newsController::class)->prefix('newses')->name('newses.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}','view')->name('view');
    Route::get('edit','edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::get('softdelete/{id}','softdelete')->name('softdelete');
    Route::get('restor/{id}','restor')->name('restor');
    Route::get('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
   
});





/**======= 
 * 
 *  one to one / hasOne Relationship route end 
 * 
 *  ===== */







/**
 * ---------  other route -----
 */
Route::controller(PostComponentController::class)->prefix('post_component')->name('post_component.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}','view')->name('view');
    Route::get('edit/{postComponent}', 'edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::post('update','update')->name('update');
    Route::get('softdelete/{id}','softdelete')->name('softdelete');
    Route::get('restor/{id}','restor')->name('restor');
    Route::get('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');


    Route::get('testmail/{id}','tesmailsend')->name('testmail');
   
});

Route::controller(UserContactController::class)->prefix('user_contact')->name('user_contact.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}','view')->name('view');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::post('update','update')->name('update');
    Route::get('softdelete/{id}','softdelete')->name('softdelete');
    Route::get('restor/{id}','restor')->name('restor');
    Route::get('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
    Route::get('messages/reply/{id}','messages_reply')->name('messages_reply');
   
});


/***   email setting route start here === */
Route::controller(EmailSettingController::class)->prefix('email_setting')->name('email_setting.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}','view')->name('view');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::post('update','update')->name('update');
    Route::get('softdelete/{id}','softdelete')->name('softdelete');
    Route::get('restor/{id}','restor')->name('restor');
    Route::get('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
});

//  send eamil --------

Route::get('send-email',[mailController::class ,'SendMail'])->name('send_email');














/**================   auth middleware end here  */
});



