<?php

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);
