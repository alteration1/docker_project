@extends('layout.main')

@section('content')
<section>
    <div class="container">
<form action="{{ URL::route('account-change-password-post') }}" method="post" class="form-container">
    
   <div class="row">
     <div class="input-group col-lg-5">
       <span class="input-group-addon">{{trans('account.old_password')}}:</span> 
       <input type="password" name="old_password" class="form-control">
       </div>
   </div>  
       <p> @if($errors->has('old_password'))
        {{ $errors->first('old_password') }}
        @endif </p>
      
    
    <div class="row">
     <div class="input-group col-lg-5">
       <span class="input-group-addon">{{trans('account.new_password')}}:</span> 
       <input type="password" name="password" class="form-control">
       </div>
   </div>  
        <p>@if($errors->has('password'))
        {{ $errors->first('password') }}
        @endif </p>
    
     <div class="row">
     <div class="input-group col-lg-5">
       <span class="input-group-addon">{{trans('account.new_pass_again')}}:</span> 
       <input type="password" name="password_again" class="form-control">
       </div>
     </div>
        <p>@if($errors->has('password_again'))
        {{ $errors->first('password_again') }}
        @endif </p>
    
     <div class="row">
     <div class="input-group col-lg-5">
    <input type="submit" value="{{trans('account.change_password')}}" class="btn btn-danger">
     </div>
     </div>
    {{Form::token()}}
</form>
    </div>
</section>
@stop
