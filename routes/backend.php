<?php
use App\Http\Controllers\backend\orm\onetomay\StudentHobbyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\orm\studentController;
use App\Http\Controllers\backend\orm\onetoone\StudentcontactController;


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







Route::controller(StudentcontactController::class)->prefix('student-contact/')->name('student_contact.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}','view')->name('view');
    Route::get('edit','edit')->name('edit');
    Route::post('submit','insert')->name('submit');

  
});



/**======= 
 * 
 *  one to one / hasOne Relationship route end 
 * 
 *  ===== */










/**================   auth middleware end here  */
});



