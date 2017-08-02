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
class MailController extends BaseController
{

    //final form
    public function sendMail()
    {
        require_once('packages/recaptchalib.php');
        $privatekey = "6Le4gAMTAAAAAKfT8saNuYbewm77mTE4hpM1YtE_";
        $resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
        if (!$resp->is_valid) {
            // What happens when the CAPTCHA was entered incorrectly
            return Redirect::route('profile-finish')
                            ->withInput()
                            ->with('global', 'Текстът в reCAPTCHA полето не е въведен правилно. Моля, въведете отново символите.');
        } else {

            $validator = Validator::make(Input::all(), array(
                        'name' => 'required|max:20|min:3',
                        'last_name' => 'required|max:20|min:3',
                        'email' => 'required|max:50|email',
                        'message' => 'max:60',
                        'ans1' => 'required',
                        'ans2' => 'required',
                        'ans3' => 'required'
                            )
            );

            if ($validator->fails()) {
                return Redirect::route('profile-finish')
                                ->withErrors($validator)
                                ->withInput();
            } else {

                $fromEmail = Input::get('email');
                $fromName = Input::get('name');
                $last_name = Input::get('last_name');
                $mesg = Input::get('message');
                $ans1 = Input::get('ans1');
                $ans2 = Input::get('ans2');
                $ans3 = Input::get('ans3');
                $course = 'bible.izuchavai.me';

                $messages = array($fromEmail, $fromName, $last_name, $mesg, $ans1, $ans2, $ans3, $course);
                $array_to_string = implode(',', $messages);
                $data = [ 'msg' => $array_to_string];

                $toEmail = 'office@izuchavai.me';


                Mail::send('emails.contact', $data, function($message) use ($toEmail, $fromEmail, $fromName) {

                    $message->to($toEmail);

                    $message->from($fromEmail, $fromName);
                });
            $user = User::find(Auth::user()->id);

            $user->lesson_id = 32;

            $user->save();
                return Redirect::to('/home')
                                ->with('global', 'Вашето съобщение е изпратено!');
            }

            return Redirect::back()
                            ->withInput()
                            ->withErrors($validation->errors);
        }
    }

    //Send question
    public function sendQuestion()
    {
        require_once('packages/recaptchalib.php');
        $privatekey = "6Le4gAMTAAAAAKfT8saNuYbewm77mTE4hpM1YtE_";
        $resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
        if (!$resp->is_valid) {
            // What happens when the CAPTCHA was entered incorrectly
            return Redirect::route('contact')
                            ->withInput()
                            ->with('global', 'Текстът в reCAPTCHA полето не е въведен правилно. Моля, въведете отново символите.');
        } else {
            $validator = Validator::make(Input::all(), array(
                        'message' => 'required|max:200'
                            )
            );

            if ($validator->fails()) {
                return Redirect::route('contact')
                                ->withErrors($validator)
                                ->withInput();
            } else {
                $id = Auth::user()->id;
                $user = User::where('id', $id)->first();
                $fromEmail = $user->email;
                $fromName = $user->username;
                $data = [ 'msg' => Input::get('message')];

                $toEmail = 'office@izuchavai.me';


                Mail::send('emails.contact', $data, function($message) use ($toEmail, $fromEmail, $fromName) {

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

}
