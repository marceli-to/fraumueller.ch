<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::view('/', 'pages.home')->name('page.home');

Route::get('/newsletter/verify', function (Request $request) {
  if (! $request->hasValidSignature()) {
    abort(401, 'Ungültiger oder abgelaufener Bestätigungslink.');
  }
  $email = $request->query('email');
  \App\Models\Subscriber::updateOrCreate(
    ['email' => $email],
    ['confirmed_at' => now()]
  );
  return view('pages.home'); // Optional success view
})->name('newsletter.verify');





