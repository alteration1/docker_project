@extends('layout.main2')

@section('content')


<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                   @if(Session::has('global'))
    <p class="text-red">{{ Session::get('global') }}</p>
        @endif
                    <p class="section-heading ta"><b>Ако имате въпроси към нас, <br>
                            ще се радваме да ви отговорим!  <br>
                            Пишете ни тук:</b></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{ Form::open(array('action' => 'MailController@questions')) }}
	             {{ Form::token() }}
                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Електронна поща" id="email">
                                    <p class="error1">@if($errors->has('email'))
                                    {{ $errors->first('email') }}
                                    @endif </p>
                                </div>
                                
                                <div class="form-group">
                                    <textarea name="message"  class="form-control" rows="3" placeholder="Вашето съобщение" id="message"></textarea>
                                    <p class="error1">@if($errors->has('message'))
                              {{ $errors->first('message') }}
                               @endif</p>
                                </div>
                                
                            <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6LcQqQMTAAAAALY33DCR4usfN2GovEraBWhQtfoC"></div></div>
                        
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