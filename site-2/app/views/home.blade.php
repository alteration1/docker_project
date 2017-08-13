@extends('layout.main')

@section('content')
<br><br>
<div class="container">
    @if(Auth::check())
    <p>{{ trans('home.hello') }}, {{ Auth::user()->username }}</p><br>

    <div class="row">
        <div class="col-md-5">
            <table class="table table-hover table-responsive">
                <tr><th class="text-center">{{ trans('home.users') }}</th ><th class="text-center">Lesson No</th></tr>
                @foreach ($useres as $user)
                <tr><td class="text-center">{{  link_to_route('users-name', $user->username, array($user->username ))   }}</td>
                    <td class="text-center">{{$user->lesson_id}}</td>
                </tr>
                @endforeach
            </table>
            {{ $useres->links()}} 
        </div>
    </div>
    <br><br><br>


    <br><br>

    @else
    <p>{{ trans('home.you_are_not') }}</p>


    @endif
</div>
@stop