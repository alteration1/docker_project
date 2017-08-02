@extends('layout.main2')

@section('content')
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                @if(Session::has('global'))
                <h3>{{ Session::get('global') }}</h3>
                @endif
                <h3>Тук може да смените вашата парола:</h3>
            </div></div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ URL::route('account-change-password-post') }}" method="post" class="form-container">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <input type="password" name="old_password" class="form-control" placeholder="Стара парола" id="phone">

                                <p class="error1"> @if($errors->has('old_password'))
                                    {{ $errors->first('old_password') }}
                                    @endif </p>
                            </div>

                            <div class="form-group">

                                <input type="password" name="password" class="form-control" placeholder="Нова парола" id="phone">
                                <p class="error1">@if($errors->has('password'))
                                    {{ $errors->first('password') }}
                                    @endif </p>
                            </div>

                            <div class="form-group">

                                <input type="password" name="password_again" class="form-control" placeholder="Повторете новата парола" id="phone">
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
                            <input type="submit" value="Промени паролата" class="btn btn-xl">
                        </div></div>
                    {{Form::token()}}
                </form>
            </div></div>
    </div>
</section>
@stop
