@extends('layout.main2')

@section('content')

<section id='contac'>
<div class="container">
@if(Session::has('global'))
    <p class="error1">{{ Session::get('global') }}</p>
        @endif
<h2 class="section-heading"> Анкета </h2>
    {{ Form::open(array('action' => 'MailController@sendMail')) }}
	{{ Form::token() }}
        
        <div class="row">
         <div class="input-group col-lg-8">
  <span class="input-group-addon">Име:</span>
       <input type="text" name="name" class="form-control" {{ (Input::old('name')) ? ' value ="'. e(Input::old('name')) .'"' : '' }}>
          </div>
      <div class="col-lg-8 error1">
          @if($errors->has('name'))
          {{ $errors->first('name') }}
          @endif</div>
        <br><br>
       
         <div class="input-group col-lg-8">
  <span class="input-group-addon">Фамилия:</span>
        <input type="text" name="last_name" class="form-control" {{ (Input::old('last_name')) ? ' value ="'. e(Input::old('last_name')) .'"' : '' }}>
        </div>
      <div class="col-lg-8 error1">
           @if($errors->has('last_name'))
          {{ $errors->first('last_name') }}
          @endif</div>
        <br><br>
         
  
         <div class="input-group col-lg-8">
  <span class="input-group-addon">Електронна поща:</span>
        <input type="text" name="email" class="form-control" {{ (Input::old('email')) ? ' value ="'. e(Input::old('email')) .'"' : '' }}>
      </div>
  <div class="col-lg-8 error1">
         @if($errors->has('email'))
          {{ $errors->first('email') }}
          @endif </div>
       <br><br>
             
      
         <div class="input-group col-lg-8">
  <span class="input-group-addon">Препоръки, въпроси:</span>
        <input type="text" name="message" class="form-control" {{ (Input::old('message')) ? ' value ="'. e(Input::old('message')) .'"' : '' }}>
    
      </div>
            <div class="col-lg-8 error1">
            @if($errors->has('message'))
          {{ $errors->first('message') }}
          @endif
         </div>
        <br><br>
        
    <div class="col-md-8">
      <div class="panel panel-default">
         <div class="panel-heading">
            <h3 class="panel-title">Желая да получа книга като подарък.</h3>
         </div>
      <div class="panel-body">
        <div class="row">
           <div class="col-lg-2">
              <div class="input-group">
                 <span class="input-group-addon">
                 <input type="radio" name="ans1" value="Книга-ДА">
                 </span>
            <div class="form-control">ДА</div>
            </div><!-- /input-group -->
           </div>
           <div class="col-lg-2">
              <div class="input-group">
                 <span class="input-group-addon">
                 <input type="radio" name="ans1" value="Книга-НЕ">
                 </span>
             <div class="form-control">НЕ</div>
           </div><!-- /input-group -->
         </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div>
     </div>
  </div>

      <p class="error1">  @if($errors->has('ans1'))
          {{ $errors->first('ans1') }}
          @endif</p>
        <br><br>
       
    <div class="col-md-8">
      <div class="panel panel-default">
         <div class="panel-heading">
            <h3 class="panel-title">Желая да получа свидетелство.</h3>
         </div>
      <div class="panel-body">
        <div class="row">
           <div class="col-lg-2">
              <div class="input-group">
                 <span class="input-group-addon">
                 <input type="radio" name="ans2" value="Свидетелство-да">
                 </span>
            <div class="form-control">ДА</div>
            </div><!-- /input-group -->
           </div>
           <div class="col-lg-2">
              <div class="input-group">
                 <span class="input-group-addon">
                 <input type="radio" name="ans2" value="Свидетелство-не">
                 </span>
             <div class="form-control">НЕ</div>
           </div><!-- /input-group -->
         </div><!-- /.col-lg-6 -->
        <!-- /.row -->
      </div>
     </div>
  </div>
</div>
        <p class="error1">  @if($errors->has('ans2'))
          {{ $errors->first('ans2') }}
          @endif</p>
        <br><br>
        
        
    <div class="col-md-8">
      <div class="panel panel-default">
         <div class="panel-heading">
            <h3 class="panel-title">Желая да ги получа:</h3>
         </div>
      <div class="panel-body">
        <div class="row">
           <div class="col-lg-3">
              <div class="input-group">
                 <span class="input-group-addon">
                 <input type="radio" name="ans3" value="По пощата">
                 </span>
            <div class="form-control">По пощата.</div>
            </div><!-- /input-group -->
           </div>
           <div class="col-lg-3">
              <div class="input-group">
                 <span class="input-group-addon">
                 <input type="radio" name="ans3" value="Лично">
                 </span>
             <div class="form-control">Лично.</div>
           </div><!-- /input-group -->
         </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      
     </div>
  </div>
</div>
     <p class="error1">  @if($errors->has('ans3'))
          {{ $errors->first('ans3') }}
          @endif</p>
        <br><br>   
         <div class="col-md-8">
         <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6LcQqQMTAAAAALY33DCR4usfN2GovEraBWhQtfoC"></div>
              </div>                        
                          </div>    
        <div class="col-md-8">
	{{ Form::submit('Изпрати',array('class'=>'btn btn-xl')) }}
         </div>
{{ Form::close() }}
       
        </div>
</div>
</section>

@stop