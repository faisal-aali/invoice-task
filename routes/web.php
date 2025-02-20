<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\InvoiceDashboard;

Route::get('/', InvoiceDashboard::class)->name('dashboard');
