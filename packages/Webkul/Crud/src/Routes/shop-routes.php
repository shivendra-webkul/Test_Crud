<?php

use Webkul\Crud\Http\Controllers\Shop\StudentController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency']], function () {

    // all shop routes will be place here
    Route::get('/students', [StudentController::class , 'index'])->name('students.index');

    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    
    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
    
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
    
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
    
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
    
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
    
    Route::get('/{locale}', function ($locale) {
         App::setLocale($locale);
         return view('crud::students.index');
    });

});
