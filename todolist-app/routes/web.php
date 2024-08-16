<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'  => 'auth'], function(){
    Route::get('/', function () {
        return view('welcome');
  });
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
   
    // Route::get('/tasks/create', [TasksController::class, 'create'])->name('tasks.create');
    // Route::post('/tasks', [TasksController::class, 'store'])->name('tasks.store');
    // Route::post('/tasks', [TasksController::class, 'store'])->name('tasks.store');
    // //Route::get('/tasks/create', [TasksController::class, 'store'])->name('store');

    // Route::post('/tasks/index', [TasksController::class, 'index'])->name('tasks.index');
    // Route::get('/tasks/index', [TasksController::class, 'index'])->name('tasks.index');

    
    Route::resource("tasks", TasksController::class);
});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('registerPost');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');
});

/* Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
}); */
