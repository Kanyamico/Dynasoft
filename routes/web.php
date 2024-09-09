<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InternerController;
use App\Http\Controllers\EmployeeViewController;
use App\Http\Controllers\ViewStudentController;
use App\Http\Controllers\InsertEmployeeController;
use App\Http\Controllers\InsertInternersController;
use App\Http\Controllers\BootCampController;
use App\Http\Controllers\InsertBootCampController;
use App\Http\Controllers\ViewBootCampStudentController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ShowUserController;
use App\Http\Controllers\ShiftManagerController;
use App\Http\Controllers\AttandanceController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('admin/dashboard',[HomeController::class,'index'])->middleware
(['auth','admin']);



Route::get('/attandance', [AttandanceController::class,'showAttandance']);

Route::get('/employee', [EmployeeController::class,'index']);

Route::get('/shiftmanager', [ShiftManagerController::class,'index']);

Route::get('/shiftmanager', [ShiftManagerController::class,'index']);

Route::get('/usermanagement', [UsersController::class,'index']);

Route::get('/interner', [InternerController::class,'index']);

//Route::get('/viewemployee', [EmployeeViewController::class,'index']);

Route::get('/interner', [ViewStudentController::class,'index']);

Route::get('/bootcamp', [BootCampController::class,'index']);

Route::get('/bootcamp', [ViewBootCampStudentController::class,'index']);

Route::view('add','employee'); 

Route::post('/employee',[InsertEmployeeController::class,'employee']);

Route::view('add','interner');

Route::post('/interner',[InsertInternersController::class,'interner']);

Route::view('add','bootcamp');

Route::post('/bootcamp',[InsertBootCampController::class,'bootcamp']);

Route::post('/shiftmanager',[ShiftManagerController::class,'AddUser'])->name('AddUser');

Route::get('/employee',[InsertEmployeeController::class,'list']);

Route::get('/interner',[InsertInternersController::class,'list']);

Route::get('/usermanagement',[ShowUserController::class,'list']);

Route::get('/bootcamp',[InsertBootCampController::class,'list']);

Route::get('/dashboard',[AttandanceController::class,'list'])->name('dashboard');

Route::get('deleteEmployee/{id}',[InsertEmployeeController::class,'delete']);

Route::get('deleteUser/{id}',[ShowUserController::class,'delete']);

Route::get('deleteStudent/{id}',[InsertBootCampController::class,'delete']);

Route::get('delete/{id}',[InsertInternersController::class,'delete']);

Route::get('editEmployee/{id}',[InsertEmployeeController::class,'edit']);

Route::get('editUser/{id}',[ShowUserController::class,'edit']);

Route::get('updatebootcamp/{id}',[InsertBootCampController::class,'edit']);

Route::get('edit/{id}',[InsertInternersController::class,'edit']);

Route::put("updatestudent/{id}",[InsertInternersController::class,'editStudent']);

Route::put("updateuser/{id}",[ShowUserController::class,'editUser']);

Route::put("updateemployee/{id}",[InsertEmployeeController::class,'editEmployee']);

Route::put("updatebootcamp/{id}",[InsertBootCampController::class,'editBoot']);

//Route::get('dashboard',[AttandanceController::class,'join']);
