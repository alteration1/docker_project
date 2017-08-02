@extends('layout.main2')

@section('content')

<section id="contact">
    <div class="container">
         
        
            
  <div class="row">
    <div class="col-md-10">
        @if(Session::has('global'))
    <h3>{{ Session::get('global') }}</h3>
        @endif
        <form action="{{ URL::route('test-post') }}" method="post">
      <div class="panel panel-default">
         <div class="panel-heading">
            <h3 class="panel-title">1.{{$quest->quest1}}</h3>
         </div>
      <div class="panel-body">
        <div class="row">
           <div class="col-lg-2">
              <div class="input-group">
                 <span class="input-group-addon">
                 <input type="radio" name="ans1" value="1">
                 </span>
            <div class="form-control">Вярно</div>
            </div><!-- /input-group -->
           </div>
           <div class="col-lg-2">
              <div class="input-group">
                 <span class="input-group-addon">
                 <input type="radio" name="ans1" value="2">
                 </span>
             <div class="form-control">Грешно</div>
           </div><!-- /input-group -->
         </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div>
     </div>
  </div>
</div>
            
            
      <div class="container">
         <div class="row">
           <div class="input-group col-lg-5"> 
             <input type="submit" value="Отговори" class="btn btn-xl btn-lg">
           </div>
         </div>
       </div>
       {{ Form::token()}}
      </form> 
    </div>
</section>
@stop