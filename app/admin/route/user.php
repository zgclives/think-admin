<?php
use \think\facade\Route;

// Route::group(function () {
//     // Route::get('', '/:controller/index');
//     // Route::get('create', '/:controller/create');
//     // Route::get(':id/edit', '/:controller/edit');
//     // Route::get(':id', '/:controller/hello');
//     // Route::post('', '/:controller/save');
//     // Route::put(':id', '/:controller/update');
//     // Route::delete(':id', '/:controller/delete');
//     Route::get('hello', 'v1.IndexController/hello');
//     Route::get('test1', 'index/hello');
//
// })->allowCrossDomain([
//     /** 设置跨域允许的header头信息 */
//     'Access-Control-Allow-Headers' => 'token'
// ]);

Route::get('login', 'LoginController/index');
Route::post('login', 'LoginController/index');

// v1版本
Route::group('v1', function () {
    Route::get('hello', 'IndexController/hello');
})->prefix('v1.')->allowCrossDomain([
    /** 设置跨域允许的header头信息 */
    'Access-Control-Allow-Headers' => 'token'
]);
