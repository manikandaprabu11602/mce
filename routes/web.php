<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorController;

Route::get('/editor', [EditorController::class, 'index'])->name('editor');
Route::post('/save-content', [EditorController::class, 'saveContent'])->name('save-content');

Route::get('/view', [EditorController::class, 'viewContent'])->name('view-content');

<<<<<<< HEAD
//changhs in main branchsssss

//jjjjjjjjjj
=======
>>>>>>> 6dc61bc138a96435aaa565b67156bcd2f85cbcd6

