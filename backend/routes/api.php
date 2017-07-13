<?php
Use App\Task;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('tasks', 'TasksController@index');
Route::get('tasks/status', 'TasksController@checkStat');
Route::get('tasks/{task}', 'TasksController@show');
Route::post('tasks', 'TasksController@store');
Route::put('tasks/{task}', 'TasksController@update');
Route::delete('tasks/{task}', 'TasksController@delete');
