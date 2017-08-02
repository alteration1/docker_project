@extends('layout.main')

@section('content')
<br><br>
<section>
        <div class="container">
            
  <form action="{{ URL::route('account-create-post') }}" method="post">
      
      <div class="row">
         <div class="input-group col-lg-5">
  <span class="input-group-addon">{{trans('account.email')}}:</span>
        <input type="text" name="email" class="form-control" {{ (Input::old('email')) ? ' value ="'. e(Input::old('email')) .'"' : '' }}>
      </div>
      </div>
        <p class="red"> @if($errors->has('email'))
          {{ $errors->first('email') }}
          @endif </p>
      
      <div class="row">
         <div class="input-group col-lg-5">
  <span class="input-group-addon">{{trans('account.username')}}:</span>
     <input type="text" name="username" class="form-control" {{ (Input::old('username')) ? ' value ="'. e(Input::old('username')) .'"' : '' }}>
      </div>
      </div>
     <p class="red">@if($errors->has('username'))
          {{ $errors->first('username') }}
          @endif </p>
          
      <div class="row">
         <div class="input-group col-lg-5">
  <span class="input-group-addon">{{trans('account.password')}}:</span>
         <input type="password" name="password" class="form-control">
      </div>
      </div>
         <p class="red"> @if($errors->has('password'))
          {{ $errors->first('password') }}
          @endif </p> 
      
      <div class="row">
         <div class="input-group col-lg-5">
  <span class="input-group-addon">{{trans('account.password_again')}}:</span>
         <input type="password" name="password_again" class="form-control">
      </div>
      </div>
         <p class="red"> @if($errors->has('password_again'))
          {{ $errors->first('password_again') }}
          @endif </p> 
        <div class="row">
         <div class="input-group col-lg-5"> 
      <input type="submit" value="{{trans('account.create_account')}}" class="btn btn-danger">
        </div>
        </div>
     {{ Form::token()}}
      </form>
         </div>
    </section>
                    
@stop