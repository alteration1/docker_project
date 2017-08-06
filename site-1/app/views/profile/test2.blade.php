@extends('layout.main2')

@section('content')
<?php $quest = Questions::find($id);?>
<section id="contact">
    <div class="container">
        @if(Session::has('global'))
    <p class="text">{{ Session::get('global') }}</p>
        @endif
        <form action="{{ URL::route('test2-post') }}" method="post">
            
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
         <div class="panel-heading">
            <p class="panel-title">2.{{$quest->quest2}}</p>
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
            
            
      <div class="container">
         <div class="row">
           <div class="input-group col-md-5"> 
             <input type="submit" value="Отговори" class="btn btn-xl bt">
           </div>
         </div>
       </div>
       {{ Form::token()}}
      </form> 
    </div>
</section>
@stop