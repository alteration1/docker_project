@extends('layout.main')

@section('content')
<br><br><br>
<p>{{trans('home.are_you_sure')}}</p><br>
    
<table border='0'>
<tr>
<td>{{ Form::open(array('route' => array('delete-lesson', $id ))) }}
{{  Form::submit(trans('home.yes'), array('class' => 'classname')) }}   
    {{Form::token()}}
{{ Form::close() }}</td>

<td>{{link_to_route('home', trans('home.no'), array(),array('class' => 'classname')) }}
</td>
</tr>
</table>

@stop