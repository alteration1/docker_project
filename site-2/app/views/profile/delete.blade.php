@extends('layout.main')

@section('content')
<br><br><br>
<p>{{trans('profile.are_you_sure_file')}}</p><br>
{{link_to_route('delete-file-confirmation', trans('profile.yes'), array('fileid'=>$fileid),array('class' => 'classname') ) }}      
{{link_to_route('profile-user', trans('profile.no'), array(),array('class' => 'classname')) }}

@stop