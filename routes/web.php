<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashbroadControlle;


Route::get('/',[DashbroadControlle::class,'index']);
Route::get('/category',[DashbroadControlle::class,'category']);
Route::post('/setdata',[DashbroadControlle::class,'setData']);
Route::get('/update_id/{id}',[DashbroadControlle::class,'updateid']);
Route::post('/update',[DashbroadControlle::class,'update']);
Route::get('/delete/{id}',[DashbroadControlle::class,'delete']);