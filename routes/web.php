<?php

use App\Http\Controllers\MotorController;
use Illuminate\Support\Facades\Http;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/motor', [MotorController::class, 'index'])->name('motor.index');
// Route::post('/motorVal', [MotorController::class, 'update'])->name('motor.update');

Route::post('/motor/speed', [MotorController::class, 'update']);



Route::get('/motor/status', [MotorController::class, 'status']);


// Route::post('/motor/speed', function (Request $request) {
//     $speed = $request->input('speed');

//     // Send the speed to the Python hardware server
//     $response = Http::post('http://localhost:5000/motor/speed', [
//         'speed' => $speed,
//     ]);

//     return $response->json();
// })->name('motor.speed');




