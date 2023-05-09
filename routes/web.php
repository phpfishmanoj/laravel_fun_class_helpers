<?php

use App\helpers\CustomClassHelper;
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

Route::get('/', function () {

    $items = [
        ['label' => 'cake', 'name' => 'Cake', 'price' => 150],
        ['label' => 'pizza', 'name' => 'Pizza', 'price' => 250],
        ['label' => 'puff', 'name' => 'Veg Puff', 'price' => 20],
        ['label' => 'samosa', 'name' => 'Samosa', 'price' => 14]
    ];

    //1
    print_r(multi_array_sum($items, 'price', 'name'));
    //2
    print find_age('1986-09-14');

    //3
    //Class based custom helper
    print CustomClassHelper::get_my_age('1986-09-14');
});
