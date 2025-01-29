<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\orm\studentController;


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
    Route::get('view','view')->name('view');
    Route::get('edit','edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    // /////
    Route::get('addinfo','addinfo')->name('addinfo');
  
});



/**======= 
 * 
 *  one to one / hasOne Relationship route end 
 * 
 *  ===== */










/**================   auth middleware end here  */
});



