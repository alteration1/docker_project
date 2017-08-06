@extends('layout.main2')

@section('content')
<section id="contact">
    <div class="container">
        <div class="row">
                <div class="col-md-6">
                    @if(Session::has('global'))
    <p class="text-red">{{ Session::get('global') }}</p>
        @endif
        <p class="section-heading ta">Тук може да смените вашата парола:</p>
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
              <div class="g-recaptcha" data-sitekey="6LcQqQMTAAAAALY33DCR4usfN2GovEraBWhQtfoC"></div></div>
              <div class="col-md-8">
    <input type="submit" value="Промени паролата" class="btn btn-xl">
    </div>
        </div></div>
    {{Form::token()}}
</form>
                </div></div>
    </div>
</section>
@stop