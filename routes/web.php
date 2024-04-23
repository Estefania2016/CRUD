<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DocumentTypeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncidenceController;
use App\Http\Controllers\TicketController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/documenttypes', [DocumentTypeController::class, 'index'])->name('documenttypes.index');
Route::get('/companies/{number_doc}', [CompanyController::class, 'index'])->name('companies.index');



Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
Route::get('/update/{id}', [CompanyController::class, 'updatePage'])->name('update.page');
Route::get('/tickets/create/{number_doc}', [TicketController::class, 'create'])->name('tickets.create');
// Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/tickets/consult', [TicketController::class, 'consult'])->name('tickets.consult');
Route::get('/tickets/do-consult', [TicketController::class, 'doConsult'])->name('tickets.doConsult');
// Route::get('/edit/{company}', [CompanyController::class, 'edit'])->name('companies.edit');
Route::get('/edit/{company}', [CompanyController::class, 'edit'])->name('companies.edit');
Route::put('/companies/{company}', [CompanyController::class, 'update'])->name('companies.update');

Route::put('/update/{company}', [CompanyController::class, 'update'])->name('companies.update');

