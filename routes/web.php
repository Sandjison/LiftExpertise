<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\checkRole;
use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


// Les autres routes restent inchangées
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/registration', [MainController::class, 'registration'])->name('registration');
Route::get('/forgottenPassword', [MainController::class, 'forgottenPassword'])->name('forgottenPassword');
Route::get('/otpCode', [MainController::class, 'otpCode'])->name('otpCode');
Route::get('/logout', [MainController::class, 'logout'])->name('logout');
Route::get('/newPassword', [MainController::class, 'newPassword'])->name('newPassword');

Route::get('/galerie', [MainController::class, 'galerie'])->name('galerie');
Route::get('/notreEquipe', [MainController::class, 'notreEquipe'])->name('notreEquipe');
Route::get('/formation', [MainController::class, 'formation'])->name('formation');
Route::get('/souscription/{id}/', [SubscriptionController::class, 'souscription'])->name('souscription');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/us', [MainController::class, 'us'])->name('us');
Route::get('/mission', [MainController::class, 'mission'])->name('mission');
Route::get('/factSheet', [MainController::class, 'factSheet'])->name('factSheet');
Route::get('/formule', [MainController::class, 'formule'])->name('formule');


Route::get('/messageDashboard', [ContactController::class, 'messageDashboard'])->name('messageDashboard');
Route::get('/souscriptionDashboard', [SubscriptionController::class, 'souscriptionDashboard'])->name('souscriptionDashboard');


Route::get('/dashboard', [MainController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/dasboardProfile', [MainController::class, 'dasboardProfile'])->middleware('auth')->name('dasboardProfile');


Route::post('/login/processing', [AuthController::class, 'login'])->name('login.process');
Route::post('/registration/processing', [AuthController::class, 'registration'])->name('registration.process');
Route::post('/forgottenPassword/processing', [AuthController::class, 'forgottenPassword'])->name('forgottenPassword.process');
Route::post('/otpCode/processing', [AuthController::class, 'checkOtpCode'])->name('otpCode.process');
Route::post('/newPassword/processing', [AuthController::class, 'newPassword'])->name('newPassword.process');
Route::post('/contact/send-mail/processing', [ContactController::class, 'contactSendEmail'])->name('sendMail');
Route::post('/subscription/processing', [SubscriptionController::class, 'subscription'])->name('subscription.process');


Route::post('/dasboardProfile', [UserController::class, 'update_profil'])->middleware('auth')->name('dasboardProfile');


Route::post('/dashboard', [UserController::class, 'update_profil_admin'])->middleware('auth')->name('dashboard');