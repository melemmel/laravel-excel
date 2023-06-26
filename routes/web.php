<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ExcelController::class, 'welcome'])->name('welcome');
Route::get('/export', [ExcelController::class, 'export'])->name('export');
Route::post('/export', [ExcelController::class, 'import'])->name('import');


