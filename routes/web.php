<?php

use App\Http\Livewire\Counter;
use App\Http\Livewire\TodoList;
use App\Http\Livewire\Calculator;
use App\Http\Livewire\ProductSearch;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CascadingDropdown;

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


Route::get('/', function () {
    return view('welcome');
})->name('counter');

Route::get('/counter', Counter::class)->name('counter');

Route::get('/calculator', Calculator::class)->name('calculator');

Route::get('/todo-list', TodoList::class)->name('todo-list');

Route::get('/cascading-dropdown', CascadingDropdown::class)->name('cascading-dropdown');

Route::get('/products', ProductSearch::class)->name('products');
