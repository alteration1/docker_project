<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home()
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
                 
            
		return View::make('home',array('less1'=>$less1,'less2'=>$less2,'less2'=>$less2,
                    'less3'=>$less3,'less4'=>$less4,'less5'=>$less5,'less6'=>$less6,
                    'less7'=>$less7,'less8'=>$less8,'less9'=>$less9,
                    'less10'=>$less10,'less11'=>$less11,'less12'=>$less12));
	}

}
