@extends('layout.main2')

@section('content')<br>
<section id="contact">
    <div class="container">
        
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        @if(Session::has('global'))
    <h3>{{ Session::get('global') }}</h3>
        @endif
        <h3>{{$user->username}} това са уроците, които сте прочели:</h3><br>

@foreach($less as $les)

<div class="text-uppercase lessons">
<b><a href="{{ URL::route('profile-lesson',$les->id) }}">{{$les->name}}</a></b><br>
</div>
   
@endforeach



</div>
</div>
    </div>
</section>

@stop