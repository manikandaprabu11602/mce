<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorController;

Route::get('/editor', [EditorController::class, 'index'])->name('editor');
Route::post('/save-content', [EditorController::class, 'saveContent'])->name('save-content');

Route::get('/view', [EditorController::class, 'viewContent'])->name('view-content');

<<<<<<< HEAD

//first change
=======
//changhs in main branch
>>>>>>> 736cb514ec4da1233d1ea17185ffdd0a2de22ef0
