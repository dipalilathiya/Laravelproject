<?php
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/',[usercontroller::class,'dashboard'])->name('dashboard');
Route::get('/formView',[usercontroller::class,'formView'])->name('formView');
Route::post('/createData',[usercontroller::class,'createData'])->name('createData');
Route::get('/viewData',[usercontroller::class,'viewData'])->name('viewData');
Route::get('/deleteData/{id}',[usercontroller::class,'deleteData'])->name('deleteData');
Route::get('/editData/{id}',[usercontroller::class,'editData'])->name('editData');

Route::get('/view' ,[admincontroller::class,'view'])->name('view');
Route::get('/view1' ,[admincontroller::class,'view1'])->name('view1');
Route::post('/create',[admincontroller::class,'create'] )->name('create');
Route::get('/delete/{id}',[admincontroller::class,'delete'])->name('delete');
Route::get('/edit/{id}', [admincontroller::class, 'edit' ])->name('edit');
Route::get('/search', [admincontroller::class, 'search' ])->name('search');
Route::get('/back' ,[admincontroller::class,'back'])->name('back');

