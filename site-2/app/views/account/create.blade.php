@extends('layout.main')

@section('content')

<section>
  <div class="container">
            
    <form action="{{ URL::route('account-create-post') }}" method="post">
      <legend>{{trans('account.title_create')}}</legend>
      
      <div class="form-group">
        <label class="">{{trans('account.email')}}:</label>
        <input type="text" name="email" class="form-control" {{ (Input::old('email')) ? ' value ="'. e(Input::old('email')) .'"' : '' }}>
        <small class="error">
          @if($errors->has('email'))
            {{ $errors->first('email') }}
          @endif
        </small>
      </div>     
    
      <div class="form-group">
        <label class="">{{trans('account.username')}}:</label>
        <input type="text" name="username" class="form-control" {{ (Input::old('username')) ? ' value ="'. e(Input::old('username')) .'"' : '' }}>
        <small class="error">
          @if($errors->has('username'))
            {{ $errors->first('username') }}
          @endif 
        </small>
      </div>
          
      
      <div class="form-group">
        <label class="">{{trans('account.password')}}:</label>
        <input type="password" name="password" class="form-control">
        <small class="error">
          @if($errors->has('password'))
          {{ $errors->first('password') }}
          @endif
        </small>
      </div>

      <div class="form-group">
        <label class="">{{trans('account.password_again')}}:</label>
        <input type="password" name="password_again" class="form-control">
        <small class="error">
          @if($errors->has('password_again'))
          {{ $errors->first('password_again') }}
          @endif
        </small>
      </div>

      <div class="form-group"> 
        <input type="submit" value="{{trans('account.create_account')}}" class="btn btn-success">
      </div>
        
     {{ Form::token()}}
      </form>
         </div>
    </section>
                    
@stop