@extends('layout.main3')
@if($less->id)
<?php View::share('title', $less->name); ?>
@else
<?php View::share('title', 'Здравен курс'); ?>
@endif
@section('content')
 
            
            <br><br>
       
    <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 modal-body">
                        
                            <!-- Project Details Go Here -->
                            <h2 class="text-center"> {{$less->name}}</h2>
                            <p class="item-intro text-muted text-center">Урок N{{$less->id}}</p>
                            <div class="col-lg-6">
                            <img class="img-responsive pics" src="{{ asset($less->pics)}}" alt="">
                            </div>
                            <p class="te"> {{Markdown::parse(Str::limit($less->text, 1000))}}</p>
                            <p><b>За да прочетете целият урок трябва да се регистрирате. </b></p>
        <p><a href="{{ URL::route('account-create') }}" class="btn btn-success btn-lg" role="button">Регистрация</a>
             </p>
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Назад</button>
                        
                    </div>
                </div>
            </div>
@stop