@extends('layout.main2')

@section('content')

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                @if(Session::has('global'))
                <h3>{{ Session::get('global') }}</h3>
                @endif
                <h3 class="">РЕГИСТРАЦИЯ ЗА САЙТА</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <form action="{{ URL::route('account-create-post') }}" method="post">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Електронна поща" id="email" {{ (Input::old('email')) ? ' value ="'. e(Input::old('email')) .'"' : '' }}> 
                                <p class="error1"> @if($errors->has('email'))
                                    {{ $errors->first('email') }}
                                    @endif </p>
                            </div>

                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Потребителско име" id="name" {{ (Input::old('username')) ? ' value ="'. e(Input::old('username')) .'"' : '' }}>

                                <p class="error1">@if($errors->has('username'))
                                    {{ $errors->first('username') }}
                                    @endif</p>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Парола" id="phone">
                                <p class="error1">@if($errors->has('password'))
                                    {{ $errors->first('password') }}
                                    @endif </p>
                            </div> 

                            <div class="form-group">
                                <input type="password" name="password_again" class="form-control" placeholder="Повторете паролата" id="phone">

                                <p class="error1">@if($errors->has('password_again'))
                                    {{ $errors->first('password_again') }}
                                    @endif </p>
                            </div> 
                            <div class="form-group">
                                <?php
                                require_once('packages/recaptchalib.php');
                                $publickey = "6Le4gAMTAAAAANrfSdbL7POeRE_7pvh4KcrjLnXy"; // you got this from the signup page
                                echo recaptcha_get_html($publickey);
                                ?>
                            </div>
                        </div>

                        <div class="col-md-12">

                            <input type="submit" value="Създай" class="btn btn-lg btn-xl">
                        </div>
                    </div>
                    {{ Form::token()}}
                </form>
            </div>
        </div>
    </div>
</section>


@stop