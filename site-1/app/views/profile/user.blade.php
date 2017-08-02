@extends('layout.main1')

@section('content')

{{$lesson->links()}}


@foreach($lesson as $less)

<div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="jumbotro">
            <div class="si">
                <h3>{{ e($user->username) }} вашият урок е: № {{ $less->lesson_id}}</h3>
                <h2>{{$less->name}}</h2></div> 
            @if($less->pics)
            <div class="col-xs-6 col-md-4"> 
                <img class="img-responsive pics" src="{{ asset($less->pics)}}">
            </div>
            @endif
            <p class="text2">{{Markdown::parse(Str::limit($less->text, 30000))}}</p>

            @if($less->test)
            <p><b>За да продължите към следващия урок трябва да попълните теста към настоящия урок.</b></p>
            <p><a href="{{ URL::route('profile-test') }}" class="btn btn-xl btn-lg" role="button">Тест</a> </p>
            @endif
        </div> 
    </div>
</div>

@endforeach
{{$lesson->links()}}





@stop
