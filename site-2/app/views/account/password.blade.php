@extends('layout.main')

@section('content')
<section>
    <div class="container">
    <form action="{{ URL::route('account-change-password-post') }}" method="post" class="form-container">
    
   
     <div class="form-group">
        <label class="">{{trans('account.old_password')}}:</label> 
        <input type="password" name="old_password" class="form-control">
        <small class="error">
            @if($errors->has('old_password'))
             {{ $errors->first('old_password') }}
            @endif
        </small>       
   </div>         
    
    <div class="form-group">
        <label class="">{{trans('account.new_password')}}:</label> 
        <input type="password" name="password" class="form-control">
        <small class="error">
            @if($errors->has('password'))
             {{ $errors->first('password') }}
            @endif 
        </small>
    </div>  
    
     
     <div class="form-group">
       <label class="">{{trans('account.new_pass_again')}}:</label> 
       <input type="password" name="password_again" class="form-control">
       <small class="error">
        @if($errors->has('password_again'))
            {{ $errors->first('password_again') }}
        @endif 
        </small>
     </div>
    
     
     <div class="form-group">
        <input type="submit" value="{{trans('account.change_password')}}" class="btn btn-danger">    
     </div>
    {{Form::token()}}
</form>
    </div>
</section>
@stop
