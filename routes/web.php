<?php
use Illuminate\Support\Facades\Route;



#Route::get('/posts/', function () {

 #return '!!!!'; });


    #Route::get('/test/', function () {
    #   return '!!  '; });

            #Route::get('/user/{id?}/', function ($id) {
             #   return $id ; });
              # Route::get('/user/{name?}/', function ($name) {
                    #return 'user: '.$name ; });
                    #Route::get('/sum/{num1}/{num2}/', function ($num1,$num2) {
                      #  return $num1 + $num2; });
                        #Route::get('/user/show-{id}/', function ($id) {
                         #   return $id; });
                        #Route::get('/user/{id}', function ($id = null ){
                              #  return $id; });




#Route::get('test/show', [App\Http\Controllers\TestController::class, 'show']);
#Route::get('pages/show', [App\Http\Controllers\Page::class, 'showOne']);
#oute::get('pages/all', [App\Http\Controllers\Page::class, 'showALL']);
#Route::get('test/show/{id}',  [App\Http\Controllers\Page::class, 'showOne']);
#Route::get('test/showOne/{id}', [App\Http\Controllers\Page::class,'showOne');
#Route::get('pages/showOne', [App\Http\Controllers\Page::class, '{$pages}']);
#Route::get('test/show/{param1}/{param2}',  [App\Http\Controllers\Page::class]);
#Route::get('/show',[App\Http\Controllers\TestController::class, 'show']);
Route::get('test/form',[App\Http\Controllers\TestController::class, 'form']);
Route::get('test/result',[App\Http\Controllers\TestController::class, 'result']);
?>