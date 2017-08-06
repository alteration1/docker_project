@extends('layout.main3')

@section('content')
<section id='contac'>
<div class="container">
<div class="row">
  <div class="col-xs-12 col-md-12">
@foreach($lesson as $less)
        

      <div class="si">№ {{ $less->lesson_id}}</div>
      <span class="si">{{$less->name}}</span> 
      
 
      <div class="jumbotro">
          @if($less->pics)
      <div class="col-xs-6 col-md-6"> 
          <img class="img-responsive pics" src="{{ asset($less->pics)}}">
      </div>
     @endif
      <p class="te">{{Markdown::parse(Str::limit($less->text, 30000))}}</p>
  
       </div> 
  </div>
</div>
   
@endforeach

{{$lesson->links()}}
</div>

</section>


@stop