@extends('layout.main')

@section('content')
<br><br>
<div class="CSSTableGenerator" ><table >
    <tr><td>{{trans('profile.date')}}</td><td>{{trans('profile.files')}}</td></tr>
    @foreach(File::files('uploads/'.basename(Request::url())) as $value)
    <tr>
    @if($files = Files::where('filename','=', $value)->first())
    <td>{{ $files->created_at }}</td><td> {{ link_to_route('profile-filecomment', basename($value),array('fileid'=>$files->id ))}}@endif</td>
          
    </tr>
     @endforeach 
</table></div>

@stop
