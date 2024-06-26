<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleSigninController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\TodoListsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EmailOTPsController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::get('/templates', function() {
    return view('template.forms-basic-inputs');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
# handle google
Route::post('auth/google', [GoogleSigninController::class, 'store'])->name('googleSignIn');

# email otp
Route::get('/emailotp/{email}', [EmailOTPsController::class, 'index'])->name('emailOtpIndex');
// Route::post('email-otp/send', [EmailOTPsController::class, 'send'])->name('emailOtpSend');
Route::middleware(['throttle:3,1'])->group(function () {
    Route::post('emailotp/verify', [EmailOTPsController::class, 'verify'])->name('emailOtpVerify');
    Route::post('/login', [UsersController::class, 'login'])->name('login');
});


Route::post('user/register', [UsersController::class, 'register'])->name('userRegsister');
Route::post('user/login', [UsersController::class, 'login'])->name('userLogin');

Route::middleware(['auth'])->group(function () {
    # tasks management
        Route::get('tasks/index', [TasksController::class, 'index'])->name('tasksIndex');
        Route::post('tasks/store', [TasksController::class, 'store'])->name('tasksStore');
        Route::post('tasks/destroy', [TasksController::class, 'destroy'])->name('tasksDestroy');
        Route::get('tasks/todos', [TasksController::class, 'todos'])->name('todos');
        Route::get('tasks/assign', [TasksController::class, 'assign'])->name('tasksAssign');
        Route::post('tasks/assign-task', [TasksController::class, 'assignTask'])->name('tasksAssignTask');
    # todo lists
        Route::post('todo-lists/store', [TodoListsController::class, 'store'])->name('todoListsStore');
        Route::post('todo-lists/destroy', [TodoListsController::class, 'destroy'])->name('todoListsDestroy');
    # team management
        Route::get('teams/index', [TeamsController::class, 'index'])->name('teamsIndex');
        Route::post('teams/store', [TeamsController::class, 'store'])->name('teamsStore');

    #user access
        Route::get('users/index', [UsersController::class, 'index'])->name('usersIndex');
        Route::get('users/tasks', [UsersController::class, 'tasks'])->name('usersTasks');
        Route::post('users/task/status', [UsersController::class, 'updateTasksStatus'])->name('updateTasksStatus');
        Route::post('users/todolist/status', [UsersController::class, 'updateTodoStatus'])->name('updateTodoStatus');
});

