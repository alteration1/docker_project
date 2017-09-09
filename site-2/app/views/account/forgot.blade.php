@extends('layout.main')

@section('content')
<br><br>
<section>
        <div class="container">
            
<form action="{{ URL::route('account-forgot-password-post') }}" method="post">
    <legend>
        {{trans('account.title_forgotten')}}
        <small>{{trans('account.content_forgotten')}}</small>
    </legend>   
    
    <div class="form-group">
        <label class="">{{trans('account.email')}}:</label>
        <input type="text" name="email" class="form-control" {{ (Input::old('email')) ? ' value ="'. e(Input::old('email')) .'"' : '' }}></p>
         <small class="error">
            @if($errors->has('email'))
                {{ $errors->first('email') }}
            @endif
        </small>
    </div>
    
    <div class="form-group">
         <input type="submit" value="{{trans('account.recover')}}" class="btn btn-info">
    </div>
    {{ Form::token()}}
    
</form>
                   
        </div>
    </section>
                  
@stop
