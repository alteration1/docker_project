@extends('layout.main')

@section('content')


<br><br>
@if(Auth::check())
<p>{{ trans('home.hello') }}, {{ Auth::user()->username }}</p><br>

<div class="row">
    <div class="col-md-10">
    <table class="table table-hover table-responsive">
    <tr><td>{{ trans('home.id') }}</td><td>{{ trans('home.lessons') }}</td><td>{{ trans('home.description') }}</td><td>{{ trans('home.created_at') }}</td><td>{{ trans('home.delete') }}</td></tr>
@foreach ($lessons as $lesson)
    <tr><td>{{$lesson->id}}</td><td>{{  link_to_route('download-lesson', basename($lesson->lesson), array($lesson->id )) }}</td>
        <td>{{$lesson->description}}</td>
        <td>{{$lesson->created_at}}</td><td>{{  link_to_route('delete-lesson-view',  trans('home.delete'), array('id'=>$lesson->id )) }}</td></tr>
    @endforeach
</table>
        
    </div>
</div>
    <br><br>


@endif
</div>
@stop