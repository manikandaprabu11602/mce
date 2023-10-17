<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorController;

Route::get('/editor', [EditorController::class, 'index'])->name('editor');
Route::post('/save-content', [EditorController::class, 'saveContent'])->name('save-content');

Route::get('/view', [EditorController::class, 'viewContent'])->name('view-content');


<<<<<<< HEAD
//s
=======
//dddddddd
>>>>>>> ddf057ee09f924a12a2361c121d1e7739d37fcf3
