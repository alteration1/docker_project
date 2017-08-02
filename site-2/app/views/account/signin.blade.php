@extends('layout.main')

@section('content')
<br><br>

 <section>
        <div class="container">
            
                    
    <form action="{{ URL::route('account-sign-in-post') }}" method="post" >
    <div class="row">
         <div class="input-group col-lg-5">
  <span class="input-group-addon">{{trans('account.email')}}:</span>
        <input type="text" name="email" class="form-control"{{ (Input::old('email')) ? ' value ="'. e(Input::old('email')) .'"' : '' }}>
   </div>
    </div>
       <p class="red"> @if($errors->has('email'))
        {{ $errors->first('email') }}
        @endif </p>
    
       <div class="row">
         <div class="input-group col-lg-5">
  <span class="input-group-addon">{{trans('account.password')}}:</span>
        <input type="password" name="password" class="form-control">
        </div>
       </div>
        <p class="red">@if($errors->has('password'))
        {{ $errors->first('password') }}
        @endif </p>
    
    
       <div class="row">
         <div class="input-group col-lg-5">
        <p><input type="checkbox" name="remember" id="remember" >
        <label for="remember">
            {{trans('account.remember')}}
        </label></p>
    </div>
       </div>
        <div class="row">
         <div class="input-group col-lg-5">
    <input type="submit" value="{{trans('account.sign_in')}}" class="btn btn-danger active">
         </div>
        </div>
    {{ Form::token() }}
     </form>
                         
        </div>
    </section>


@stop