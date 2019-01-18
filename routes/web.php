<?php
   Route::get('/','StaticPagesController@home')->name('home');
   Route::get('/help','StaticPagesController@help')->name('help');
   Route::get('/about','StaticPagesController@about')->name('about');

   /*
    * 登录注册模块路由
    * */
   Route::get('signup','UsersController@create')->name('signup');

