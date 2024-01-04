<?php
use App\Http\Controllers\MyController;
use Illuminate\Http\Request;
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
Route::get('/my-controller',[MyController::class,'index']);
Route::get('/my-controller2','App\Http\Controllers\MyController@index');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/my-route',function(){

    return view('myfolder.mypage');
});
Route::post('/my-route',function(Request $reg){
    $data['myinput'] = $reg->input('myinput');
    return view('my_route',$data);
});
