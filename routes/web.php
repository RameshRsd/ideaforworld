<?php

Route::group(['namespace'=>'frontend'],function() {
    Route::any('', 'HomeController@index');

    Route::group(['prefix'=>'services','namespace'=>'service'],function(){
        Route::get('','ServiceController@index');
    });

    Route::group(['prefix'=>'about','namespace'=>'about'],function(){
        Route::get('','AboutController@index');
    });

    Route::group(['prefix'=>'portfolio','namespace'=>'portfolio'],function(){
        Route::get('','PortfolioController@index');
    });

    Route::group(['prefix'=>'team','namespace'=>'team'],function(){
        Route::get('','TeamController@index');
    });
    Route::group(['prefix'=>'contact','namespace'=>'contact'],function(){
        Route::get('','ContactController@index');
        Route::post('','ContactController@store');
    });

});

Route::group(['middleware'=>'guest'],function(){
    Route::get('login','AuthController@getLogin')->name('login');
    Route::post('login','AuthController@postLogin');
    Route::get('password/reset','Auth\\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset','Auth\ResetPasswordController@reset')->name('password.update');
    Route::post('password/email','Auth\\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');

});
Route::any('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['namespace'=>'backend'],function() {

    /* ================================================ Super Admin CONTROL Start============================================================== */
    Route::group(['middleware'=>'admin','prefix'=>'admin','namespace'=>'admin'],function(){
        Route::get('','AdminController@index');

        Route::group(['prefix'=>'profile','namespace'=>'profile'],function(){
            Route::get('','ProfileController@index');
            Route::post('','ProfileController@update');
        });
        Route::group(['prefix'=>'slider'],function(){
            Route::get('','SliderController@index');
            Route::get('slider-list','SliderController@slider_list');
            Route::post('slider-list/{id}/changeStatus','SliderController@changeStatus');
            Route::get('add-slider','SliderController@create');
            Route::post('add-slider','SliderController@store');
            Route::post('slider-list/{id}/update','SliderController@update');
            Route::get('slider-list/{id}/delete','SliderController@delete');
        });

        Route::group(['prefix'=>'contact','namespace'=>'contact'],function(){
            Route::get('','ContactController@index');
            Route::get('/{id}/remove','ContactController@remove');
            Route::get('/{id}/restore','ContactController@restore');
        });

        /* ========================== filemanager ============================= */
        Route::group(['prefix'=>'file-manager','namespace'=>'media'],function(){
            Route::get('','MediaController@index');
            Route::get('initialize', 'FileManagerController@initialize')
                ->name('fm.initialize');
            Route::get('content', 'FileManagerController@content')
                ->name('fm.content');

            Route::get('tree', 'FileManagerController@tree')
                ->name('fm.tree');

            Route::get('select-disk', 'FileManagerController@selectDisk')
                ->name('fm.select-disk');

            Route::post('upload', 'FileManagerController@upload')
                ->name('fm.upload');

            Route::post('delete', 'FileManagerController@delete')
                ->name('fm.delete');

            Route::post('paste', 'FileManagerController@paste')
                ->name('fm.paste');

            Route::post('rename', 'FileManagerController@rename')
                ->name('fm.rename');

            Route::get('download', 'FileManagerController@download')
                ->name('fm.download');

            Route::get('thumbnails', 'FileManagerController@thumbnails')
                ->name('fm.thumbnails');

            Route::get('preview', 'FileManagerController@preview')
                ->name('fm.preview');

            Route::get('url', 'FileManagerController@url')
                ->name('fm.url');

            Route::post('create-directory', 'FileManagerController@createDirectory')
                ->name('fm.create-directory');

            Route::post('create-file', 'FileManagerController@createFile')
                ->name('fm.create-file');

            Route::post('update-file', 'FileManagerController@updateFile')
                ->name('fm.update-file');

            Route::get('stream-file', 'FileManagerController@streamFile')
                ->name('fm.stream-file');

            Route::post('zip', 'FileManagerController@zip')
                ->name('fm.zip');

            Route::post('unzip', 'FileManagerController@unzip')
                ->name('fm.unzip');

            // Route::get('properties', 'FileManagerController@properties');

            // Integration with editors
            Route::get('ckeditor', 'FileManagerController@ckeditor')
                ->name('fm.ckeditor');

            Route::get('tinymce', 'FileManagerController@tinymce')
                ->name('fm.tinymce');

            Route::get('tinymce5', 'FileManagerController@tinymce5')
                ->name('fm.tinymce5');

            Route::get('summernote', 'FileManagerController@summernote')
                ->name('fm.summernote');

            Route::get('fm-button', 'FileManagerController@fmButton')
                ->name('fm.fm-button');

        });
        /* ========================== filemanager ============================= */
        Route::get('fm-button', 'AdminController@fmButton')
            ->name('fm.fm-button');


    });
    /* ================================================ Super Admin CONTROL Start============================================================== */

});

