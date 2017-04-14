<?php
Route::get('array/{$index}/{$s}',['uses'=>'LinkedListController@insert']);
Route::get('array/{$index}',['uses'=>'LinkedListController@delete']);
Route::get('array/{$s}',['uses'=>'LinkedListController@push']);
Route::get('array/{$lastValue}',['uses'=>'LinkedListController@pop]']);
Route::get('array/{$length}',['uses'=>'LinkedListController@size']);
Route::get('array/{$s}',['uses'=>'LinkedListController@print_list']);
Route::any('array/',['uses'=>'LinkedListController@__construct']);
Route::get('array/{$s}/{$h}/{$b}',['uses'=>'LinkedListController@lala']);