@extends('layout.main')

@section('content')
<br><br>
<h1>{{ trans('home.users_blade_title') }}</h1>
<div class="table-responsive">
    <table class="table">
    <thead>
        <tr><td>{{trans('profile.date')}}</td><td>{{trans('profile.files')}}</td></tr>
    </thead>

    <tbody>
        @foreach(File::files('uploads/'.basename(Request::url())) as $value)
        <tr>
        @if($files = Files::where('filename','=', $value)->first())
        <td>{{ $files->created_at }}</td>
        <td> {{ link_to_route('profile-filecomment', basename($value),array('fileid'=>$files->id ))}}@endif</td>          
        </tr>
        @endforeach
     </tbody> 
</table>
</div>

@stop
