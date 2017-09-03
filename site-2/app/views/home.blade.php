@extends('layout.main')

@section('content')
<br><br>
<div class="container">
@if(Auth::check())
<h1>{{ trans('home.hello') }}, {{ Auth::user()->username }}</h1>
<p class="lead">{{ trans('home.users') }}</p>

<div class="row">
    @foreach ($useres as $user)
    <div class="col-sm-6 col-md-3 ">            
            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img class="img-center" src="{{ asset('css/avatar-default.gif') }}">
                </div>
                <div class="info">
                    <div class="title">
                        {{  link_to_route('users-name', $user->username, array($user->username ))   }}
                    </div>                    
                </div>
            </div>            
        </div>
    @endforeach
</div>

<div class="row">
    <div class="col-xs-12">
        {{ $useres->links()}} 
    </div>
</div>

    <br><br>



@else
<p>{{ trans('home.you_are_not') }}</p>


@endif
</div>
@stop