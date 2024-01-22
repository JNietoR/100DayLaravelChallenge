<?php

use Illuminate\Support\Facades\Route;

use APP\Http\Controllers\PageController;

Route::get('/',            [PageController::class, 'blog'])->name('blog');
Route::get('/{post:slug}', [PageController::class, 'blog'])->name('post');
