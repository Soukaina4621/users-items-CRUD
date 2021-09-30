<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route:: get('user', function(){

//     echo'hello';
// });

// Route :: get('user', function(){
//  return view ('user');
// });
// // view with data
// Route ::get('user',function(){
// $fullName="Mohammed Taha";
// return view('user',['fullName'=>$fullName]);
// });

// view with array

Route :: get('users',[UserController::class,'showUsers'])->name('users');
   

// Route :: get('edit/{id}', function($id){

//     echo $id;
// }); 

// Route :: get('edit/{id}', function($id){

//     return view ('edit',['id'=>$id]);
// }); 

Route :: get('details/{id}',[UserController::class,'details'])-> name('UserDetails');

Route :: get('items_list',[PostController::class,'index'])-> name ('items_list');

Route :: get('insert',[PostController::class,'add']);

Route::get('show/{id}',[PostController::class,'show'])->name ('ItemDetails');

Route::get('deleteItem/{id}',[PostController::class,'destroy'])-> name('deleteItem');

// Route::get('updateItem/{id}',[PostController::class,'update']);

Route::get('create',[PostController::class,'create'])->name('create');

Route::post('store',[PostController::class,'store'])->name('store');

Route::get('editItem/{id}',[PostController::class,'edit'])->name('editItem');

Route::put('updateItem/{id}',[PostController::class,'updateItem'])->name('updateItem');



git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:Soukaina4621/users-items-CRUD.git
git push -u origin main