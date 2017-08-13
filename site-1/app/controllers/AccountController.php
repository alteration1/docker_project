<?php

class AccountController extends BaseController {

    public function getSignIn() {
        return View::make('account.signin');
    }

    public function postSignIn() {


        Input::merge(array_map('trim', Input::all()));
        $validator = Validator::make(Input::all(), array(
                    'email' => 'required|email',
                    'password' => 'required'
                        )
        );
        if ($validator->fails()) {
            return Redirect::route('account-sign-in')
                            ->withErrors($validator)
                            ->withInput();
        } else {

            $remember = (Input::has('remember')) ? true : false;

            $auth = Auth::attempt(array(
                        'email' => Input::get('email'),
                        'password' => Input::get('password'),
                        'active' => 1
                            ), $remember);


            if ($auth) {
                //Redirect to the intended page
                return Redirect::intended('/user');
            } else {
                return Redirect::route('account-sign-in')
                                ->with('global', 'Електронната поща/паролата е грешна, или профилът ви не е активиран.');
            }
        }
        return Redirect::route('account-sign-in')
                        ->with('global', 'Има проблем с влизането в профилът ви.');
    }

    public function getSignOut() {
        Auth::logout();
        return Redirect::route('home');
    }

    public function getCreate() {
        return View::make('account.create');
    }

    public function postCreate() {

        Input::merge(array_map('trim', Input::all()));
        $validator = Validator::make(Input::all(), array(
                    'email' => 'required|max:50|email|unique:users',
                    'username' => 'required|max:20|min:3',
                    'password' => 'required|min:6',
                    'password_again' => 'required|same:password'
                        )
        );

        if ($validator->fails()) {
            return Redirect::route('account-create')
                            ->withErrors($validator)
                            ->withInput();
        } else {
            $email = Input::get('email');
            $username = Input::get('username');
            $password = Input::get('password');

            //Activation code
            $code = str_random(60);

            $user = User::create(array(
                        'email' => $email,
                        'username' => $username,
                        'password' => Hash::make($password),
                        'lesson_id' => 1,
                        'code' => $code,
                        'active' => 0
            ));

            if ($user) {

                Mail::send('emails.auth.activate', array('link' => URL::route('account-activate', $code), 'username' => $username), function($message) use ($user) {
                    $message->to($user->email, $user->username)->subject('Активиране на вашият профил');
                });

                return Redirect::route('account-create')
                                ->with('global', 'Вашият профил е създаден! Изпратихме ви имейл с линк за активиране на профила ви.');
            }
        }
    }

    public function getActivate($code) {
        $user = User::where('code', '=', $code)->where('active', '=', 0);
        if ($user->count()) {
            $user = $user->first();
            //Update user to active state
            $user->active = 1;
            $user->code = '';
            if ($user->save()) {
                return Redirect::route('account-sign-in')
                                ->with('global', 'Профилът ви е активиран! Можете да влезете в него.');
            }
        }
        return Redirect::route('account-create')
                        ->with('global', 'Не можем да активираме профилът ви. Опитайте по късно.');
    }

    public function getChangePassword() {
        return View::make('account.password');
    }

    public function postChangePassword() {
        Input::merge(array_map('trim', Input::all()));
        $validator = Validator::make(Input::all(), array(
                    'old_password' => 'required',
                    'password' => 'required|min:6',
                    'password_again' => 'required|same:password'
                        )
        );
        if ($validator->fails()) {
            //redirect 
            return Redirect::route('account-change-password')
                            ->withErrors($validator);
        } else {
            //change password
            $user = User::find(Auth::user()->id);

            $old_password = Input::get('old_password');
            $password = Input::get('password');

            if (Hash::check($old_password, $user->getAuthPassword())) {
                //password user provided matches!
                $user->password = Hash::make($password);
                if ($user->save()) {
                    return Redirect::route('account-change-password')
                                    ->with('global', 'Вашата парола беше променена.');
                }
            } else {
                return Redirect::route('account-change-password')
                                ->with('global', 'Старата ви парола е невярна');
            }
        }

        return Redirect::route('account-change-password')
                        ->with('global', 'Паролата ви не беше променена.');
    }

    public function getForgotPassword() {
        return View::make('account.forgot');
    }

    public function postForgotPassword() {

        Input::merge(array_map('trim', Input::all()));
        $validator = Validator::make(Input::all(), array(
                    'email' => 'required|email'
                        )
        );
        if ($validator->fails()) {
            return Redirect::route('account-forgot-password')
                            ->withErrors($validator)
                            ->withInput();
        } else {
            //change password
            $user = User::where('email', '=', Input::get('email'));

            if ($user->count()) {
                $user = $user->first();
                //Generate a new code and password
                $code = str_random(60);
                $password = str_random(10);
                $user->code = $code;
                $user->password_temp = Hash::make($password);

                if ($user->save()) {
                    Mail::send('emails.auth.forgot', array('link' => URL::route('account-recover', $code), 'username' => $user->username, 'password' => $password), function($message) use ($user) {
                        $message->to($user->email, $user->username)->subject('Вашата нова парола');
                    });

                    return Redirect::route('account-forgot-password')
                                    ->with('global', 'Изпратихме новата ви парола на електронната ви поща.');
                }
            }
        }

        return Redirect::route('account-forgot-password')
                        ->with('global', 'Неуспешно искане за нова парола.');
    }

    public function getRecover($code) {
        $user = User::where('code', '=', $code)->where('password_temp', '!=', '');

        if ($user->count()) {
            $user = $user->first();

            $user->password = $user->password_temp;
            $user->password_temp = '';
            $user->code = '';

            if ($user->save()) {
                return Redirect::route('account-sign-in')
                                ->with('global', 'Профила ви беше възстановен и може да се впишете с новата си парола.');
            }
        }
        return Redirect::route('account-sign-in')
                        ->with('global', 'Неуспешно възстановяване на профила.');
    }

    public function questions() {
        return View::make('account.questions');
    }

}
