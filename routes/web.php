<?php

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
    return view('welcome');
});
/* ***  نقل من route الى controls  ****

Route::get('/about', function () {
    $name ="ali";
     return view('about', compact('name'));
     return view('about', with($name));
     return view('about', [$name]);
});

*/
/* عند الاستدعاء داخل url نكتب ؟اسم المتغير = قيمته.
Route::get('/about', function () {
    $name =request('name');
     return view('about', compact('name'));
});
*/
Route::get('/about', function () {
    $name =request('name');
     return view('about', compact('name'));
});

Route::post('/stor', function () {
    $name =request('name');
     return view('about', compact('name'));
});

Route::get('/tasks' , function (){
    $tasks = [
        'task1',
        'task2',
        'task3',
        'task4',
        'task5',
        'task6'
    ];
    return view('tasks' , compact('tasks'));
});

Route::get('show/{id}', function($id){
    $tasks = [
        'task1',
        'task2',
        'task3',
        'task4',
        'task5',
        'task6'
    ];
    $task = $tasks[$id];
    return view('show', compact('task'));
});