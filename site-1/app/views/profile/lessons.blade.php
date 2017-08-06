@extends('layout.main2')

@section('content')<br>
<section id="contact">
    <div class="container">
        
<div class="row">
    <div class="col-md-5 col-md-offset-2">
        @if(Session::has('global'))
    <p class="text-red">{{ Session::get('global') }}</p>
        @endif
        <h4>{{$user->username}} това са уроците, които сте прочели:</h4><br>

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