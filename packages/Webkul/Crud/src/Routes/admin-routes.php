<?php

use Webkul\Crud\Http\Controllers\Shop\StudentController;

Route::group(['middleware' => ['web', 'admin']], function () {
  Route::prefix(config('app.admin_url'))->group(function () {

    // all admin routes will place here

    // Route::view('/crud', 'crud::admin.index')->name('crud.admin.index');
    Route::get('/crud', [StudentController::class, 'index'])->defaults('_config', [
      'view' => 'admin::index',
    ])->name('admin.crud.index');
  });
});
