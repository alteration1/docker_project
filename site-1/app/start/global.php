<?php

/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/

ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',

));

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a basic log file setup which creates a single file for logs.
|
*/

Log::useFiles(storage_path().'/logs/laravel.log');

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/

App::error(function(Exception $exception, $code)
{
	Log::error($exception);
});

App::missing(function($exception)
{

     $less1 = Lessons::find(1);
             $less2 = Lessons::find(2);
              $less3 = Lessons::find(3);
               $less4 = Lessons::find(4);
                $less5 = Lessons::find(5);
                 $less6 = Lessons::find(6);
                 $less7 = Lessons::find(7);
             $less8 = Lessons::find(8);
              $less9 = Lessons::find(9);
               $less10 = Lessons::find(10);
                $less11 = Lessons::find(12);
                 $less12 = Lessons::find(13);
    return Response::view('home',array('less1'=>$less1,'less2'=>$less2,'less2'=>$less2,
                    'less3'=>$less3,'less4'=>$less4,'less5'=>$less5,'less6'=>$less6,
                    'less7'=>$less7,'less8'=>$less8,'less9'=>$less9,
                    'less10'=>$less10,'less11'=>$less11,'less12'=>$less12), 404);
});

/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| into maintenance mode. Here, you will define what is displayed back
| to the user if maintenance mode is in effect for the application.
|
*/

App::down(function()
{
	return Response::make("Be right back!", 503);
});

/*
|--------------------------------------------------------------------------
| Require The Filters File
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| a nice separate location to store our route and application filter
| definitions instead of putting them all in the main routes file.
|
*/

require app_path().'/filters.php';