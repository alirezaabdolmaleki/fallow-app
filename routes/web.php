<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

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





Route::get('token', function () {
    // $user= new User();
    //     $user->name = 'Test User';
    //     $user->email = 'test@exampleghj.com';
    //     $user->mobile ='09032446432';
    //     $user->save();
    $user = User::first();

    return $user->createToken('myapptoken')->plainTextToken;
});
 Route::get('/', function () {
    return view('welcome');
 });
