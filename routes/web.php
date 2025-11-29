<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Halaman Utama (Home)
Route::get('/', [PortfolioController::class, 'home'])->name('home');

// Halaman About Me
Route::get('/about', [PortfolioController::class, 'about'])->name('about');

// Halaman Project
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');

// Halaman Product
Route::get('/product', [PortfolioController::class, 'product'])->name('product');

// Halaman Skill
Route::get('/skill', [PortfolioController::class, 'skill'])->name('skill');

// Route untuk Kirim Pesan
Route::post('/contact/send', [PortfolioController::class, 'storeMessage'])->name('contact.send');