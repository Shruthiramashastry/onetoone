<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Address;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('insert',function(){
    $user = User::findOrFail(1);
    $address = new Address(['name' => 'Shruthi']);
    $user->address()->save($address);
});

Route::get('update',function(){
    $address = Address::find(1)->first();
    $address->name = 'Sumeru';
    $address->save();
});

