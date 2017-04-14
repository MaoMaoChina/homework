<?php

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
Route::any('methodOne',['uses'=>'MemberController@insert']);
Route::any('methodTwo',['uses'=>'MemberController@delete']);
Route::any('methodThree',['uses'=>'MemberController@push']);
Route::any('methodFour',['uses'=>'MemberController@pop']);
Route::any('methodFive',['uses'=>'MemberController@size']);
Route::any('methodSix',['uses'=>'MemberController@print_list']);
Route::any('linkedlist/save',['uses'=>'MemberController@save']);
Route::any('linkedlist/delete',['uses'=>'MemberController@deleteTwo']);
Route::any('linkedlist/insert',['uses'=>'MemberController@insertTwo']);
Route::any('linkedlist/construct',['uses'=>'MemberController@constructTwo']);
Route::any('method',['uses'=>'MemberController@__construct']);



Route::any('request1',['uses'=>'LinkedListController@request1']);
