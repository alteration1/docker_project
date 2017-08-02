<?php

Route::get('/', array(
    'as' => 'home',
    'uses' => 'HomeController@home'
));

    
/*
 | Profile
 */
Route::get('/user',array(
    'before' => 'auth',
    'as' => 'profile-user',
    'uses' => 'ProfileController@user'
));

/*
 | Links
 */
Route::get('/links',array(
    'before' => 'auth',
    'as' => 'links',
    'uses' => 'ProfileController@links'
));

/*
 | Showlesson
 */
Route::get('/showlesson/{id}',array(
    'as' => 'showlesson',
    'uses' => 'ProfileController@showlesson'
));

/*
 | test
 */
Route::get('/test',array(
    'before' => 'auth',
    'as' => 'profile-test',
    'uses' => 'ProfileController@test'
));

/*
 | test2
 */
Route::get('/test2',array(
    'before' => 'auth',
    'as' => 'profile-test2',
    'uses' => 'ProfileController@test2'
));

/*
 | test3
 */
Route::get('/test3',array(
    'before' => 'auth',
    'as' => 'profile-test3',
    'uses' => 'ProfileController@test3'
));

/*
 | lessons
 */
Route::get('/lessons',array(
    'before' => 'auth',
    'as' => 'profile-lessons',
    'uses' => 'ProfileController@lessons'
));

/*
 | lesson
 */
Route::get('/lesson/{id}',array(
    'before' => 'auth',
    'as' => 'profile-lesson',
    'uses' => 'ProfileController@lesson'
));

/*
 | finish
 */
Route::get('/finish',array(
    'before' => 'auth',
    'as' => 'profile-finish',
    'uses' => 'ProfileController@finish'
));

/*
 | Contact
 */
Route::get('/contact',array(
    'before' => 'auth',
    'as' => 'contact',
    'uses' => 'ProfileController@contact'
));

/*
 | Info
 */
Route::get('/info/usinfo',array(
    'before' => 'auth',
    'as' => 'usinfo',
    'uses' => 'AdminController@usinfo'
));

/*
 | Search-get (GET) 
 */
Route::get('/info/search',array(
    'before' => 'auth',
    'as' => 'search-get',
    'uses' => 'AdminController@getSearch'
));

/*
 | Search-post (POST)
 */
Route::post('/info/search',array(
    'as' => 'search-post',
    'uses' => 'AdminController@postSearch'
));

/*
 | Contact-post
 */
Route::post('/contact',array(
    'as' => 'contact-post',
    'uses' => 'MailController@sendQuestion'
));

        
/*
 | finish-post
 */
Route::post('/finish',array(
    'as' => 'finish-post',
    'uses' => 'MailController@sendMail'
));

/*
 | test-post
 */
Route::post('/test',array(
    'as' => 'test-post',
    'uses' => 'ProfileController@testPost'
));

/*
 | test2-post
 */
Route::post('/test2',array(
    'as' => 'test2-post',
    'uses' => 'ProfileController@test2Post'
));

/*
 | test3-post
 */
Route::post('/test3',array(
    'as' => 'test3-post',
    'uses' => 'ProfileController@test3Post'
));



/*
 | Authenticated group
 */
Route::group(array('before' => 'auth'), function(){
    /*
     | CSRF protection group
     */
    Route::group(array('before' => 'csrf'),function(){
        /*
     | Change password (POST)
     */
    Route::post('/account/change-password', array(
        'as' => 'account-change-password-post',
        'uses' => 'AccountController@postChangePassword'
    ));
        
    });
    
    /*
     | Change password (GET)
     */
    Route::get('/account/change-password', array(
        'as' => 'account-change-password',
        'uses' => 'AccountController@getChangePassword'
    ));
    
    /*
     | Sign out (GET)
     */
    Route::get('/account/sign-out', array(
        'as' => 'account-sign-out',
        'uses' => 'AccountController@getSignOut'
    ));
});



/*
 | Unauthenticated group
 */
Route::group(array('before'=>'guest'),function(){
    /*
     | CSRF protection group
     */
    Route::group(array('before'=>'csrf'), function(){
         /*
     | Create account (POST)
     */
    Route::post('/account/create', array(
        'as' => 'account-create-post',
        'uses' => 'AccountController@postCreate'
    ));
    /*
     | Sign in (POST)
     */
    Route::post('/account/sign-in',array(
        'as' => 'account-sign-in-post',
        'uses' => 'AccountController@postSignIn'
    ));
    
    
    
    /*
     | Forgot password (POST)
     */
    Route::post('/account/forgot-password',array(
        'as' => 'account-forgot-password-post',
        'uses' => 'AccountController@postForgotPassword'
    ));
    
    });
    
    /*
     | Forgot password (GET)
     */
    Route::get('/account/forgot-password',array(
        'as' => 'account-forgot-password',
        'uses' => 'AccountController@getForgotPassword'
    ));
    
    Route::get('/account/recover/{code}',array(
        'as' => 'account-recover',
        'uses' => 'AccountController@getRecover'
    ));
    
    /*
     | Sign in (GET)
     */
    Route::get('/account/sign-in',array(
        'as' => 'account-sign-in',
        'uses' => 'AccountController@getSignIn'
    ));
    
   
    
    /*
     | Create account (GET)
     */
    Route::get('/account/create', array(
        'as' => 'account-create',
        'uses' => 'AccountController@getCreate'
    ));
    Route::get('/account/activete/{code}',array(
        'as' => 'account-activate',
        'uses' => 'AccountController@getActivate'
    ));
});
