<?php

Route::get('/', array(
    'as' => 'home',
    'uses' => 'HomeController@home'
));

  /*
     | Sign out (GET)
     */
    Route::get('/count-lessons.json', array(
        'as' => 'count-lessons',
        'uses' => 'AccountController@getCountLessons'
    ));

/*
 | Language
 */

Route::post('/language',array(
    'before' => 'csrf',
    'as' => 'language-chooser',
    'uses' => 'LanguageController@chooser'
));

/*
 | Profile
 */
Route::get('/user',array(
    'as' => 'profile-user',
    'uses' => 'ProfileController@user'
));


/*
 | Upload file user
 */

Route::post('/user',array(
    'as' => 'profile-user-post',
    'uses' => 'ProfileController@postFile'
));

/*
 | Delete file user
 */

Route::get('/user/{fileid}',array(
    'as' => 'delete-file',
    'uses' => 'ProfileController@deleteFile'
));

/*
 | Delete file user confirmation
 */

Route::get('user/{fileid}/delete',array( 
    'as' => 'delete-file-confirmation',
    'uses' => 'ProfileController@handleDelete'
));

/*
 | File comment
 */
Route::get('/filecomment/{fileid}',array(
         'as' => 'profile-filecomment',
         'uses' => 'ProfileController@fileComment'
           )
        );

/*
 | Download file post
 */
Route::get('/filecomment/download/{fileid}',array(
    'as' => 'file-download-post',
    'uses' => 'ProfileController@downloadFile',
   
));

/*
 | Download file get
 
Route::get('/filecomment/download/{fileid}',array(
    'as'=>'file-download',
    'uses' => 'ProfileController@downloadView'
        ));
*/
/*
 | Post comment
 */
Route::post('/filecomment/{fileid}', array(
    'as'   => 'profile-filecomment-post',
    'uses' => 'ProfileController@postComment'
));

/*
 | Delete comment view
 */
Route::get('/filecomment/delete/{id}', array(
    'as'   => 'delete-comment',
    'uses' => 'ProfileController@commentDelete'
));

/*
 | Delete comment
 */
Route::get('/filecomment/delete/{id}/delete', array(
    'as'   => 'delete-comment-confirmation',
    'uses' => 'ProfileController@commentDeleteHandle'
));

/*
 | View users home
 */
Route::get('/users/{username}',array(
         'as' => 'users-name',
         'uses' => 'ProfileController@usersView'
           )
        );
/*
 | Upload file admin
 */

Route::post('/home',array(
    'as' => 'admin-file-post',
    'uses' => 'AdminController@postFile'
));



/*
 | Download lesson
 */
Route::get('/lesson/{id}',array(
         'as' => 'download-lesson',
         'uses' => 'AdminController@downloadLesson'
           )
        );

/*
 | View lesson name
 
Route::get('/lesson/{id}',array(
         'as' => 'lesson-name',
         'uses' => 'AdminController@lessonView'
           )
        );
*/

/*
 | Delete lesson post
 */
Route::post('/lesson/delete/{id}',array(
         'as' => 'delete-lesson',
         'uses' => 'AdminController@handleDeleteLesson'
           )
        );

/*
 | Delete lesson view
 */
Route::get('/lesson/delete/{id}',array(
         'as' => 'delete-lesson-view',
         'uses' => 'AdminController@deleteLesson'
           )
        );

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


