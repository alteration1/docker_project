@extends('layout.main')

@section('content')
<br><br>
  <?php $fileid = basename(Request::url());
  $files = Files::where('id','=', $fileid)->first(); 
   ?>

<h1>{{trans('profile.comment_for')}} <small>{{ basename($files->filename) }}</small></h1>

{{ link_to_route('file-download-post', trans('profile.download_file'), array('fileid'=>$fileid), array('class' => 'btn btn-default')) }}
       
 
<br><br>

{{ Form::open(array('route' => array('profile-filecomment-post', $fileid = basename(Request::url())))) }}

    {{  Form::textarea('comment',$value=null,array('class' => 'ta5')) }}<br><br>
    
    @if($errors->has('comment'))
          {{ $errors->first('comment') }}
          @endif
   {{  Form::submit(trans('profile.post'), array('class' => 'btn btn-info')) }}   
    {{Form::token()}}
{{ Form::close() }}


<br>
<div class="table-responsive" >
    <table class="table">
    <thead class="thead-inverse">
        <tr>
            <th>{{trans('profile.username')}}</th>
            <th>{{trans('profile.comment')}}</th>
            <th>{{trans('profile.date')}}</th>
            <th>{{trans('profile.delete')}}</th>
        </tr>
    </thead>
    
    
    @foreach ($comments = Comment::where('filename', '=', $files->filename)->get() as $comment)
    <tr>
        <td>{{ $comment->username }}</td>    
        <td>{{$comment->comment }}</td>
        <td>{{$comment->created_at}}</td>
        <td>{{link_to_route('delete-comment', trans('profile.delete_a'), array('id'=>$comment->id))}}</td>
    </tr>
    @endforeach
   
</table>
</div>

@stop 