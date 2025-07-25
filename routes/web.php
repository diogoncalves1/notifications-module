<?php

use Illuminate\Support\Facades\Route;

Route::group([
    // 'middleware' => 'auth',
    'prefix' => 'api/notifications',
    'as' => 'api.notifications.'
], function () {
    Route::get('/', [\App\Http\Controllers\NotificationController::class, 'index'])->name('index');
    Route::get('/unread', [\App\Http\Controllers\NotificationController::class, 'unread'])->name('unread');
    Route::post('/{id}/read', [\App\Http\Controllers\NotificationController::class, 'markAsRead'])->name('markAsRead');
    Route::post('/read-all', [\App\Http\Controllers\NotificationController::class, 'readAllAsRead'])->name('readAllAsRead');
});
