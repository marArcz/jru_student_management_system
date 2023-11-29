<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/success", function (Request $request) {
    return redirect()->route($request->string('redirect'))->with('success', $request->string('message'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'adminAuth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])
    ->group(function () {
        Route::resources([
            'students' => StudentController::class,
            'programs' => ProgramController::class,
        ]);

        Route::get('/students/{student}/delete',[StudentController::class,'confirmDelete'])->name('students.confirm.delete');
        Route::get('/programs/{program}/delete',[ProgramController::class,'confirmDelete'])->name('programs.confirm.delete');
    });

require __DIR__ . '/auth.php';
