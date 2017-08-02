@extends('layout.main')

@section('content')
<p>{{ e($user->username) }} ({{ e($user->email) }})</p><br>


{{ Form::open(array('action' => 'ProfileController@postFile','files'=>true)) }}
	{{ Form::token() }}
        
        
	{{ Form::file('filename') }} 
        
        @if($errors->has('filename'))
          {{ $errors->first('filename') }}
          @endif
	{{ Form::submit(trans('profile.upload'), array('class' => 'classname')) }}
{{ Form::close() }}


<br><br>
<div class="CSSTableGenerator" ><table border='1'>
    <tr><td>{{trans('profile.id')}}</td><td>{{trans('profile.files')}}</td><td>{{trans('profile.delete')}}</td></tr>
    @foreach(File::files('uploads/'.$user->username) as $value)
    @if($files = Files::where('filename','=', $value)->first())
    <tr>
        <td>
    {{ $files->created_at }}</td><td> {{ link_to_route('profile-filecomment', basename($value),array('fileid'=>$files->id ))}}</td>
       <td>{{link_to_route('delete-file', trans('profile.delete_a'), array('fileid'=>$files->id))}}</td>
    </tr>
    @endif
      @endforeach  
</table></div>

@stop
