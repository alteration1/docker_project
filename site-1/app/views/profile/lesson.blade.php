@extends('layout.main1')

@section('content')
{{$lesson->links()}}

@foreach($lesson as $less)
             
 <div class="row">
  <div class="col-xs-12 col-md-12">
      <div class="jumbotro">
          <div class="si">
                <h3> № {{ $less->lesson_id}}</h3>
                <h2>{{$less->name}}</h2></div> 
          @if($less->pics)
      <div class="col-xs-6 col-md-4"> 
          <img class="img-responsive pics" src="{{ asset($less->pics)}}">
      </div>
     @endif
      <p class="text2">{{Markdown::parse(Str::limit($less->text, 30000))}}</p>
  
       </div> 
  </div>
</div>
   
@endforeach

{{$lesson->links()}}





@stop