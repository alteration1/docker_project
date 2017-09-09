@extends('layout.main')

@section('content')
<p></p><br>


@if($lesson = Lessons::find(basename(Request::url())))

<table><tr><td>{{basename($lesson->lesson)}}</td></tr></table>
<br><br>
@endif
@stop