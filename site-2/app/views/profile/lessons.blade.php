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

@if(Auth::user()->role)
<p></p><br>
{{ Form::open(array('action' => 'AdminController@postFile','files'=>true)) }}
	{{ Form::token() }}
	{{ Form::file('file') }}
        @if($errors->has('file'))
          {{ $errors->first('file') }}
          @endif
          <br><br>
         <p> {{ trans('home.description') }}: <br>{{ Form::textarea('description',$value=null,array('class' => 'ta5')) }}
          @if($errors->has('description'))
          {{ $errors->first('description') }}
          @endif </p>
          <br>
	{{ Form::submit(trans('home.upload') , array('class' => 'btn btn-danger')) }}
{{ Form::close() }}
<br><br>
@endif


@endif
</div>
@stop