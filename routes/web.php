<?php

use App\Http\Controllers\fileupload\fileUploadController;
use App\Http\Controllers\form\formController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function(){




Route::get('/', function () {
    return view('frontend.index');
})->name('home');
Route::get('/about', function () {
    return view('frontend.pages.about');
});
Route::get('/service', function () {
    return view('frontend.pages.service');
});
Route::get('/blog', function () {
    return view('frontend.pages.blog');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});
Route::get('/component', function () {
    return view('frontend.component.index');
});



Route::post('submit-form1',[formController::class,'insert']);



Route::view('basic','frontend.fromall.basic');
Route::post('basic-form',[formController::class,'basic']);

// toaster
Route::view('test','frontend.fromall.test');
Route::post('test-form',[formController::class,'test']);

// sweet alert 
Route::view('sweet','frontend.fromall.sweet');
Route::post('sweet-form',[formController::class,'sweet']);
Route::post('delete-form',[formController::class,'delete'])->name('delete-form');


// flasher alert 
Route::view('flasher','frontend.fromall.flaser');
Route::post('flasher-form',[formController::class,'flasher']);



/** == file upload ===route === */
Route::prefix('file-uploads')->name('file_upload.')->group(function(){
    Route::get('/all',[fileUploadController::class,'index'])->name('all');
    Route::get('/add',[fileUploadController::class,'add'])->name('add');
    Route::get('/view',[fileUploadController::class,'view'])->name('view');
    Route::get('/edit/{slug}',[fileUploadController::class,'edit'])->name('edit');
    Route::post('/submit',[fileUploadController::class,'insert'])->name('submit');
    Route::post('/update',[fileUploadController::class,'update'])->name('update');
    Route::delete('/softdelete/{id}',[fileUploadController::class,'soft_delete'])->name('softdelete');
    Route::get('/restore/{id}',[fileUploadController::class,'restore'])->name('restore');
    Route::delete('/delete/{id}',[fileUploadController::class,'delete'])->name('delete');
    Route::get('/recycle',[fileUploadController::class,'recycle'])->name('recycle');

});







});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
