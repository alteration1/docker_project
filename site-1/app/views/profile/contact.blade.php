@extends('layout.main2')

@section('content')




<section id="contact">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-10">
                    @if(Session::has('global'))
    <h3>{{ Session::get('global') }}</h3>
        @endif
                    <h3><b>Ако имате въпроси към нас, ще се радваме да ви отговорим!
                            <br>Пишете ни тук:</b></h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    {{ Form::open(array('action' => 'MailController@sendQuestion')) }}
	             {{ Form::token() }}
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="message"  class="form-control" rows="3" placeholder="Вашето съобщение" id="message"></textarea>
                                    <p class="error1">@if($errors->has('message'))
                                    {{ $errors->first('message') }}
                                     @endif</p>
                                </div>
                                 <div class="form-group">
                                    <?php
                                    require_once('packages/recaptchalib.php');
                                    $publickey = "6Le4gAMTAAAAANrfSdbL7POeRE_7pvh4KcrjLnXy"; // you got this from the signup page
                                    echo recaptcha_get_html($publickey);
                                    ?>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                {{ Form::submit('Изпрати съобщение',array('class'=>'btn btn-xl')) }}
                            </div>
                        </div>
                   {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>


@stop