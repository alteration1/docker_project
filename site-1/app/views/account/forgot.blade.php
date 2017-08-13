@extends('layout.main2')

@section('content')

<section id="contact">
    <div class="container">

        <div class="row">

            <div class="col-md-6">
                @if(Session::has('global'))
                <p class="text-red">{{ Session::get('global') }}</p>
                @endif
                <p class="section-heading ta">Ако сте забравили паролата си, моля, напишете<br> в полето 
                    електронната си поща и ние ще ви <br>изпратим нова парола.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <form action="{{ URL::route('account-forgot-password-post') }}" method="post">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Електронна поща" id="email" {{ (Input::old('email')) ? ' value ="'. e(Input::old('email')) .'"' : '' }}> 
                                <p class="error1"> @if($errors->has('email'))
                                    {{ $errors->first('email') }}
                                    @endif </p>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <input type="submit" value="Възстанови" class="btn btn-xl">
                        </div>
                    </div>
                    {{ Form::token()}}
                </form>
            </div>
        </div>
    </div>
</section>


@stop