<?php

class ProfileController extends BaseController {

    public function user() {

        $username = Auth::user()->username;
        $user = User::where('username', '=', $username);

        if ($user->count()) {
            $user = $user->first();
            $lesson = Lesson::where('lesson_id', '=', $user->lesson_id)->paginate(1);

            if ($user->lesson_id < 7) {
                return View::make('profile.user', array('user' => $user, 'lesson' => $lesson));
            } else {
                if ($user->lesson_id == 7) {
                    return Redirect::route('profile-finish')
                                    ->with('global', 'Поздравления успешно завършихте курса!
        Ако желаете да получите като подарък книга и свидетелство <br>
        за завършен курс, моля попълнете следната форма.');
                } elseif ($user->lesson_id > 7) {
                    return Redirect::route('profile-lessons')->with('global', 'Нямате настоящ урок тъй като сте завършили курса.');
                }
            }
        }

        return Redirect::route('profile-lessons');
    }

    public function lessons() {

        $username = Auth::user()->username;
        $user = User::where('username', '=', $username);

        if ($user->count()) {
            $user = $user->first();
            $less = Lessons::where('id', '<', $user->lesson_id)->get();
            return View::make('profile.lessons', array('user' => $user, 'less' => $less));
        }

        return App::abort(404);
    }

    public function lesson($id) {

        $lesson = Lesson::where('lesson_id', '=', $id)->paginate(1);
        return View::make('profile.lesson')
                        ->with('lesson', $lesson);
    }

    public function test() {

        $id = Auth::user()->lesson_id;
        $quest = Questions::find($id);
        if ($quest) {
            return View::make('profile.test', array('id' => $id, 'quest' => $quest));
        } else {
            return Redirect::route('home');
        }
    }

    public function test2() {
        $id = Auth::user()->lesson_id;
        $quest = Questions::find($id);
        if ($quest) {
            return View::make('profile.test2', array('id' => $id, 'quest' => $quest));
        } else {
            return Redirect::route('home');
        }
    }

    public function test3() {
        $id = Auth::user()->lesson_id;
        $quest = Questions::find($id);
        if ($quest) {
            return View::make('profile.test3', array('id' => $id, 'quest' => $quest));
        } else {
            return Redirect::route('home');
        }
    }

    public function finish() {
        $id = Auth::user()->lesson_id;
        if ($id == 6) {
            $user = User::find(Auth::user()->id);
            $user->lesson_id = 7;

            $user->save();
            return View::make('profile.finish')
                            ->with('id', $id);
        } else {
            return View::make('profile.finish')
                            ->with('id', $id);
        }
    }

    public function contact() {
        $username = Auth::user()->username;
        $user = User::where('username', '=', $username);

        if ($user->count()) {
            $user = $user->first();
            return View::make('profile.contact')
                            ->with('user', $user);
        }
    }

    public function testPost() {
        $ans1 = Input::get('ans1');

        $id = Auth::user()->lesson_id;
        $ans = Test::find($id);
        if ($ans1 == $ans->ans1) {
            return Redirect::route('profile-test2')
                            ->with('global', 'Верен отговор!');
        } else {
            return Redirect::route('profile-test')
                            ->with('global', 'Отговорът ви не е верен! Опитайте отново!');
        }

        return Redirect::route('profile-test')
                        ->with('global', 'Отговорът ви не е верен! Опитайте отново!');
    }

    public function test2Post() {

        $ans1 = Input::get('ans1');

        $id = Auth::user()->lesson_id;
        $ans = Test::find($id);
        if ($ans1 == $ans->ans2) {
            return Redirect::route('profile-test3')
                            ->with('global', 'Верен отговор!');
        } else {
            return Redirect::route('profile-test2')
                            ->with('global', 'Отговорът ви не е верен! Опитайте отново!');
        }

        return Redirect::route('profile-test2')
                        ->with('global', 'Отговорът ви не е верен! Опитайте отново!');
    }

    public function test3Post() {

        $ans1 = Input::get('ans1');

        $id = Auth::user()->lesson_id;
        $ans = Test::find($id);
        if ($ans1 == $ans->ans3) {
            if ($id < 6) {
                $user = User::find(Auth::user()->id);

                $user->lesson_id = $id + 1;
                $id +=1;
                $user->save();


            
                return Redirect::route('profile-user')
                                ->with('global', 'Верен отговор! Можете да продължите със следващия урок.');
            } else {

                return Redirect::route('profile-finish')
                                ->with('global', 'Поздравления успешно завършихте курса!
        Ако желаете да получите като подарък книга и свидетелство <br>
        за завършен курс, моля попълнете следната форма.');
            }
        } else {
            return Redirect::route('profile-test3')
                            ->with('global', 'Отговорът ви не е верен! Опитайте отново!');
        }

        return Redirect::route('profile-test3')
                        ->with('global', 'Отговорът ви не е верен! Опитайте отново!');
    }

    public function showlesson($id) {

        $less = Lessons::find($id);
        return View::make('profile.showlesson')
                        ->with('less', $less);
    }

    public function links() {
        return View::make('profile.links');
    }

}
