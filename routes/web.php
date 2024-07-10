<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\ambulenceController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('/',[ambulenceController::class,'index']);
route::get('/userlogin',[ambulenceController::class,'userlogin']);
route::post('/userloginAction',[ambulenceController::class,'userloginAction']);
route::get('/userreg',[ambulenceController::class,'userreg']);
route::post('/userregAction',[ambulenceController::class,'userregAction']);
route::get('/userindex',[ambulenceController::class,'userindex']);
route::get('/detailsview/{id}',[ambulenceController::class,'detailsview']);
route::get('userlogout',[ambulenceController::class,'userlogout']);
route::get('/home',[ambulenceController::class,'home']);









route::get('/adminindex',[adminController::class,'adminindex']);
route::get('/userview',[adminController::class,'userview']);
route::get('/ambdisplay',[adminController::class,'ambdisplay']);

// route::get('/useredit',[adminController::class,'useredit']);
// route::post('/usereditAction',[adminController::class,'usereditAction']);
route::get('/add',[adminController::class,'add']);
route::post('/addAction',[adminController::class,'addAction']);
route::get('/ambedit/{id}',[adminController::class,'ambedit']);
route::post('/ambeditAction/{id}',[adminController::class,'ambeditAction']);
route::get('/delete/{id}',[adminController::class,'delete']);
route::get('/adminlogin',[adminController::class,'adminlogin']);
route::post('adminloginAction',[adminController::class,'adminloginAction']);
route::get('/logout',[adminController::class,'logout']);












