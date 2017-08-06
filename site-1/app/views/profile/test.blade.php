@extends('layout.main2')

@section('content')

<section id="contact">
    <div class="container">
        @if(Session::has('global'))
    <p class="text">{{ Session::get('global') }}</p>
        @endif
                 
  <div class="row">
    <div class="col-md-12">
         <form action="{{ URL::route('test-post') }}" method="post">
      <div class="panel panel-default">
         <div class="panel-heading">
            <p class="panel-title">1. {{$quest->quest1}}</p>
         </div>
      <div class="panel-body">
        <div class="row">
           <div class="col-md-2">
              <div class="input-group">
                 <span class="input-group-addon">
                 <input type="radio" name="ans1" value="1">
                 </span>
            <div class="form-control">Вярно</div>
            </div><!-- /input-group -->
           </div>
           <div class="col-md-2">
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
    
      
         <div class="row">
           <div class="input-group col-md-5"> 
             <input type="submit" value="Отговори" class="btn btn-xl bt">
           </div>
         </div>
       
       {{ Form::token()}}
      </form> 
    </div>
</section>
@stop