<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MailController
 *
 * @author Росана
 */
class MailController extends BaseController{


    //When someone finish the course, he will fill form with questions and answers that go to email of admin.
    public function sendMail(){
    
     $captcha;                
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          return Redirect::route('profile-finish')
                            ->withInput()
                            ->with('global', 'reCAPTCHA полето не е въведено правилно. Моля, въведете го отново.');
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcQqQMTAAAAAMCYLWeb-K-ISq-Oml4iqQEN7PVo&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        $response = json_decode($response,true);
       if($response['success'] == false)
        {
          return Redirect::route('profile-finish')
                            ->withInput()
                            ->with('global', 'reCAPTCHA полето не е въведено правилно. Моля, въведете го отново.');
        }else{
    
    Input::merge(array_map('trim', Input::all()));
        $validator = Validator::make(Input::all(),
                array(
                    'name'       => 'required|max:20|min:3',
                    'last_name'       => 'required|max:20|min:3',
                    'email'          => 'required|max:50|email',
                    'message' => 'max:100',
                    'ans1' => 'required',
                    'ans2' => 'required',
                    'ans3' => 'required'
                   )
                );
        
        if($validator->fails()){
            return Redirect::route('profile-finish')
                    ->withErrors($validator)
                    ->withInput();
        }else{

       $fromEmail = Input::get('email');
       $fromName = Input::get('name');
       $last_name = Input::get('last_name');
       $mesg = Input::get('message');
       $ans1 = Input::get('ans1');
       $ans2 = Input::get('ans2');
       $ans3 = Input::get('ans3');
       $course = 'family.izuchavai.me';
              
       $messages = array($fromEmail,$fromName,$last_name,$mesg,$ans1,$ans2,$ans3,$course);
       $array_to_string = implode(',', $messages);
       $data = [ 'msg' => $array_to_string ];

       $toEmail = 'office@izuchavai.me';
      

       Mail::send('emails.contact', $data, function($message) use ($toEmail, $fromEmail, $fromName){

           $message->to($toEmail);

           $message->from($fromEmail, $fromName);

           
       });
       
            $user = User::find(Auth::user()->id);

            $user->lesson_id = 16;

            $user->save();
        

    return Redirect::to('/finish')
        ->with('global', 'Вашето съобщение е изпратено!');
    }

    return Redirect::route('profile-finish')
        ->withInput()
        ->withErrors($validation->errors);
        }
    }
    
    //To send question to admin after login.
    public function sendQuestion(){
     $captcha;                
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          return Redirect::route('contact')
                            ->withInput()
                            ->with('global', 'reCAPTCHA полето не е въведено правилно. Моля, въведете го отново.');
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcQqQMTAAAAAMCYLWeb-K-ISq-Oml4iqQEN7PVo&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        $response = json_decode($response,true);
       if($response['success'] == false)
        {
          return Redirect::route('contact')
                            ->withInput()
                            ->with('global', 'reCAPTCHA полето не е въведено правилно. Моля, въведете го отново.');
        }else{
    
    Input::merge(array_map('trim', Input::all()));
         $validator = Validator::make(Input::all(),
                array(
                    'message'       => 'required|max:200'
                   )
                );
        
        if($validator->fails()){
            return Redirect::route('contact')
                    ->withErrors($validator)
                    ->withInput();
        }else{
       $id = Auth::user()->id;
       $user = User::where('id',$id)->first();
       $fromEmail = $user->email;
       $fromName = $user->username;
       $data = [ 'msg' => Input::get('message') ];

       $toEmail = 'office@izuchavai.me';
      

       Mail::send('emails.contact', $data, function($message) use ($toEmail, $fromEmail, $fromName){

           $message->to($toEmail);

           $message->from($fromEmail, $fromName);

           
       });

    return Redirect::to('/contact')
        ->with('global', 'Съобщението ви беше успешно изпратено!');
    }

    return Redirect::back()
        ->withInput()
        ->withErrors($validation->errors);
        }
    }
    
    //To send question before auth.
    public function questions(){
    
      $captcha;                
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          return Redirect::route('questions')
                            ->withInput()
                            ->with('global', 'reCAPTCHA полето не е въведено правилно. Моля, въведете го отново.');
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcQqQMTAAAAAMCYLWeb-K-ISq-Oml4iqQEN7PVo&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        $response = json_decode($response,true);
       if($response['success'] == false)
        {
          return Redirect::route('questions')
                            ->withInput()
                            ->with('global', 'reCAPTCHA полето не е въведено правилно. Моля, въведете го отново.');
        }else{
    
    Input::merge(array_map('trim', Input::all()));
        $validator = Validator::make(Input::all(),
                array(
                    'message'       => 'required|max:200',
                     'email'    => 'required|email'
                   )
                );
        
        if($validator->fails()){
            return Redirect::route('questions')
                    ->withErrors($validator)
                    ->withInput();
        }else{
       
       $fromEmail = Input::get('email');
       $data = [ 'msg' => Input::get('message') ];

       $toEmail = 'office@izuchavai.me';
      

       Mail::send('emails.contact', $data, function($message) use ($toEmail, $fromEmail){

           $message->to($toEmail);

           $message->from($fromEmail);

           
       });

    return Redirect::to('/questions')
        ->with('global', 'Съобщениeто ви беше успешно изпратено!');
    }

    return Redirect::back()
        ->withInput()
        ->withErrors($validation->errors);
        }
      
    }
    
    }
    
    