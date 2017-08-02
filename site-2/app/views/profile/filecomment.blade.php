@extends('layout.main')

@section('content')
<br><br>
  <?php $fileid = basename(Request::url());
  $files = Files::where('id','=', $fileid)->first(); 
   ?>

<p>{{trans('profile.comment_for')}} {{ basename($files->filename) }}
       {{ link_to_route('file-download-post', trans('profile.download_file'), array('fileid'=>$fileid), array('class' => 'classname')) }}
       <br><p/>
 
<br><br>

{{ Form::open(array('route' => array('profile-filecomment-post', $fileid = basename(Request::url())))) }}

    {{  Form::textarea('comment',$value=null,array('class' => 'ta5')) }}<br><br>
    
    @if($errors->has('comment'))
          {{ $errors->first('comment') }}
          @endif
   {{  Form::submit(trans('profile.post'), array('class' => 'classname')) }}   
    {{Form::token()}}
{{ Form::close() }}


<br>
<div class="CSSTableGenerator" ><table>
    <tr><td>{{trans('profile.username')}}</td><td>{{trans('profile.comment')}}</td><td>{{trans('profile.date')}}</td><td>{{trans('profile.delete')}}</td></tr>
    
    @foreach ($comments = Comment::where('filename', '=', $files->filename)->get() as $comment)
    <tr><td>{{ $comment->username }}</td>
    
    <td>{{$comment->comment }}</td>
    <td>{{$comment->created_at}}</td>
    <td>{{link_to_route('delete-comment', trans('profile.delete_a'), array('id'=>$comment->id))}}</td></tr>
    @endforeach
   
</table></div>

@stop 