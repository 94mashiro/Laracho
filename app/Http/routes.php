<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [
        'uses' => 'RouteController@getHomepage',
        'as' => 'homepage'
    ]);
});

Route::group(['prefix' => 'admin', 'middleware' => ['web']], function () {
    Route::get('/login', [
        'uses' => 'Admin\RouteController@gotoLogin',
        'as' => 'admin.gotologin'
    ]);
    Route::get('/', [
        'uses' => 'Admin\RouteController@gotoAdmin',
        'as' => 'admin.gotoadmin'
    ]);
    Route::post('/login/signin', [
        'uses' => 'Admin\UserController@postUserSignIn',
        'as' => 'admin.signin'
    ]);
    Route::post('/login/register', [
        'uses' => 'Admin\UserController@postUserRegister',
        'as' => 'admin.register'

    ]);
    Route::get('/article/addarticle', [
        'uses' => 'Admin\RouteController@gotoAddArticle',
        'as' => 'admin.gotoaddarticle',
    ]);
    Route::get('/logout', [
        'uses' => 'Admin\UserController@getLogout',
        'as' => 'admin.logout'
    ]);
    Route::get('/article', [
        'uses' => 'Admin\RouteController@gotoArticle',
        'as' => 'admin.gotoarticle'
    ]);
    Route::get('/category', [
        'uses' => 'Admin\RouteController@gotoCategory',
        'as' => 'admin.gotocategory'
    ]);
    Route::get('/addcategory', [
        'uses' => 'Admin\RouteController@gotoAddCategory',
        'as' => 'admin.gotoaddcategory'
    ]);
    Route::post('/addcategory/add', [
        'uses' => 'Admin\CategoryController@postAddCategory',
        'as' => 'admin.addcategory',
        'middleware' => 'auth'
    ]);
    Route::post('/addarticle/add', [
        'uses' => 'Admin\ArticleController@postAddArticle',
        'as' => 'admin.addarticle',
        'middleware' => 'auth'
    ]);
    Route::post('/addarticle/convertUrl', [
        'uses' => 'Admin\ArticleController@postConvertUrl',
        'as' => 'admin.converturl',
    ]);
});

