@extends('layout.main')

@section('content')
<br><br>
<section>
        <div class="container">
            
<form action="{{ URL::route('account-forgot-password-post') }}" method="post">
    <div class="row">
         <div class="input-group col-lg-5">
  <span class="input-group-addon">{{trans('account.email')}}:</span>
       <input type="text" name="email" class="form-control" {{ (Input::old('email')) ? ' value ="'. e(Input::old('email')) .'"' : '' }}></p>
         </div>
    </div>
       <p class="red">@if($errors->has('email'))
        {{ $errors->first('email') }}
        @endif </p>
    <div class="row">
         <div class="input-group col-lg-5">
    <input type="submit" value="{{trans('account.recover')}}" class="btn btn-danger">
         </div>
    </div>
    {{ Form::token()}}
    
</form>
                   
        </div>
    </section>
                  
@stop
