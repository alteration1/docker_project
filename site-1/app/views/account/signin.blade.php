@extends('layout.main2')

@section('content')

 <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    @if(Session::has('global'))
    <h3>{{ Session::get('global') }}</h3>
        @endif
                    <h3>ВХОД В САЙТА</h3>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                                      
                        <form action="{{ URL::route('account-sign-in-post') }}" method="post">
                            
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                   <input type="text" name="email" class="form-control" placeholder="Електронна поща" id="email" {{ (Input::old('email')) ? ' value ="'. e(Input::old('email')) .'"' : '' }}> 
                                    <p class="error1"> @if($errors->has('email'))
                                    {{ $errors->first('email') }}
                                    @endif </p>
                                </div>
                              
                                
                              
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Парола" id="phone">
                           <p class="error1">@if($errors->has('password'))
                               {{ $errors->first('password') }}
                               @endif </p>
                                </div> 
                                <div class="form-group">
                                    <!-- div class="g-recaptcha" data-sitekey="6Le4gAMTAAAAANrfSdbL7POeRE_7pvh4KcrjLnXy"></div -->
                                    <?php
                                    require_once('packages/recaptchalib.php');
                                    $publickey = "6Le4gAMTAAAAANrfSdbL7POeRE_7pvh4KcrjLnXy"; // you got this from the signup page
                                    echo recaptcha_get_html($publickey);
                                    ?>
                                </div>
                            </div>
                           
                           <div class="col-md-12">
                                
                                 <input type="submit" value="Влез" class="btn btn-xl">
                            </div>
                        </div>
                            {{ Form::token()}}
                    </form>
                </div>
            </div>
        </div>
    </section>


@stop