<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\ClerkController;
use App\Http\Controllers\StudentHomeController;
use App\Http\Controllers\StudentIdController;
use App\Http\Controllers\StudentPasswordController;
use App\Http\Controllers\StudentProfileController;
use App\Models\Student;
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
})->name('welcome');

// Route::get("/success", function (Request $request) {
//     return redirect()->route($request->string('redirect'))->with('success', $request->string('message'));
// });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])
    ->prefix('/admin')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('admin.dashboard');

        Route::get('/studentId/{student}/print', [StudentIdController::class, 'print'])->name('admin.studentId.print');

        Route::patch('/students/{student}/update/status', [StudentController::class, 'updateStatus'])->name('students.status.update');
        Route::get('/students/{student}/verify', [StudentController::class, 'verify'])->name('students.verify');
        Route::get('/students/{student}/print', [StudentController::class, 'print'])->name('students.print');
        Route::resource('students.studentId', StudentIdController::class)->parameters(['studentId' => 'student'])->shallow();
        Route::resources([
            'programs' => ProgramController::class,
            'clerks' => ClerkController::class,
            'students' => StudentController::class,
        ]);
        Route::middleware(['role:admin'])->group(function () {
            Route::get('/students/{student}/delete', [StudentController::class, 'confirmDelete'])->name('students.confirm.delete');
            Route::get('/programs/{program}/delete', [ProgramController::class, 'confirmDelete'])->name('programs.confirm.delete');
            Route::get('/clerks/{clerk}/delete', [ClerkController::class, 'confirmDelete'])->name('clerks.confirm.delete');
        });
    });

Route::prefix('/students')->name('students.')->group(function () {
    Route::prefix("/auth")->name('auth.')->group(function () {
        Route::get("/", [StudentAuthController::class, 'index'])->name('index');
        Route::post("/login", [StudentAuthController::class, 'login'])->name('login');
        Route::get("/create", [StudentAuthController::class, 'create'])->name('create');
        Route::post("/register", [StudentAuthController::class, 'register'])->name('register');
        Route::post("/logout", [StudentAuthController::class, 'logout'])->name('logout')->middleware(['auth:student']);
    });

    Route::middleware(['auth:student'])->group(function () {
        Route::resource('home', StudentHomeController::class);
        Route::resource('profile', StudentProfileController::class)->parameters([
            'profile' => 'student',
        ]);
        Route::resource('password', StudentPasswordController::class)->parameters([
            'password' => 'student',
        ]);
        Route::get('/studentId/{student}/print', [StudentIdController::class, 'print'])->name('studentId.print');
    });
});

require __DIR__ . '/auth.php';
