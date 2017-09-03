@extends('layout.main')

@section('content')


 <section>
        <div class="container">
            
    
    <form action="{{ URL::route('account-sign-in-post') }}" method="post" >
        <legend>{{trans('account.title')}}</legend>
        <div class="form-group">
            <label class="">{{trans('account.email')}}:</label>
            <input type="text" name="email" class="form-control"{{ (Input::old('email')) ? ' value ="'. e(Input::old('email')) .'"' : '' }}>
            <small class="error">
                @if($errors->has('email'))
                    {{ $errors->first('email') }}
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
        
        <div class="form-group checkbox">
            <label for="remember">
                <input type="checkbox" name="remember" id="remember" >
                {{trans('account.remember')}}
            </label>
        </div>

        <div class="form-group checkbox">
            <br>
            <input type="submit" value="{{trans('account.sign_in')}}" class="btn btn-info">
        </div>   
        
        {{ Form::token() }}
    </form>
    </div>
</section>


@stop