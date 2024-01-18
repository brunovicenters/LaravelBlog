<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Services\Newsletter;
use Illuminate\Support\Facades\Route;
// use Illuminate\Validation\ValidationException;

Route::post("newsletter", function (Newsletter $newsletter) {
    request()->validate(['email' => 'required|email']);

    try {
        $newsletter->subscribe(request('email'));
    } catch (\Exception $e) {
        // throw ValidationException::withMessages([
        //     'email' => 'This email could not be added to our newsletter list.',
        // ]);
        return redirect('/#newsletter')
            ->with('error', 'This email could not be added to our newsletter list.');
    }

    return redirect('/')
        ->with('success', 'You are now signed up for our newsletter!');
});

Route::get('/', [PostsController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostsController::class, 'show'])->name('post');
Route::post('posts/{post:slug}/comments/', [PostCommentsController::class, 'store'])->middleware('auth');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
