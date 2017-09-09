@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <h1>{{ e($user->username) }} <small>({{ e($user->email) }})</small></h1>
           
    </div>
</div>
<hr>

<div class="row">
    {{ Form::open(array('action' => 'ProfileController@postFile','files'=>true)) }}
	{{ Form::token() }}
    
        <div class="col-xs-12 col-md-4 form-group">
            <div class="form-control">
                {{ Form::file('filename') }} 
            </div>            
        </div>   
            
            @if($errors->has('filename'))
                {{ $errors->first('filename') }}
            @endif
        <div class="col-xs-12 col-md-4 form-group">
            {{ Form::submit(trans('profile.upload'), array('class' => 'btn btn-info')) }}
        </div>
    
{{ Form::close() }}

</div>

<hr>


<div class="row">
    <div class="col-xs-12">
        <div class="table-responsive" >
            <table class="table table-hover">
                <thead class="thead-inverse">
                    <tr><th>{{trans('profile.id')}}</th><th>{{trans('profile.files')}}</th><th>{{trans('profile.delete')}}</th></tr>
                </thead>
            
            @foreach(File::files('uploads/'.$user->username) as $value)
            @if($files = Files::where('filename','=', $value)->first())
            <tr>
                <td>{{ $files->created_at }}</td>
                <td> <i class="glyphicon glyphicon-comment"></i> {{ link_to_route('profile-filecomment', basename($value),array('fileid'=>$files->id ))}}</td>
                <td> <i class="glyphicon glyphicon-trash"></i> {{link_to_route('delete-file', trans('profile.delete_a'), array('fileid'=>$files->id, ))}}</td>
            </tr>
            @endif
            @endforeach  
            </table>
        </div>
    </div>
</div>

@stop
