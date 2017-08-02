@extends('layout.main')

@section('content')
<br><br><br>
<p>{{ trans('profile.are_you_sure_del') }}</p><br>
{{link_to_route('delete-comment-confirmation', trans('profile.yes'), array('id'=>$id),array('class' => 'classname') ) }} 
<?php   ?>
{{link_to_route('profile-filecomment', trans('profile.no'), array('fileid'=>$fileid),array('class' => 'classname')) }}

@stop

