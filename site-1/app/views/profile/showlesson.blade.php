@extends('layout.main')
@if($less->id)
<?php View::share('title', $less->name); ?>
@else
<?php View::share('title', 'Здравен курс'); ?>
@endif
@section('content')

      <div class="si">Урок № {{ $less->id}}</div>
      <span class="si">{{$less->name}}</span> 
      
             <div class="row">
  <div class="col-xs-12 col-md-12">
      <div class="jumbotro">
        @if($less->pics)  
      <div class="col-xs-6 col-md-4"> 
          <img class="img-responsive pics" src="{{ asset($less->pics)}}">
      </div>
     @endif
      <p class="text2">{{Markdown::parse(Str::limit($less->text, 1000))}}</p>
        
<p><b>За да прочетете целият урок трябва да се регистрирате. </b></p>
        <p><a href="{{ URL::route('account-create') }}" class="btn btn-danger btn-lg" role="button">Регистрация</a> <a href="{{ URL::route('home') }}" class="btn btn-info btn-lg" role="button">Към началото</a> </p>

 </div> 
  </div>
</div>
   
@stop