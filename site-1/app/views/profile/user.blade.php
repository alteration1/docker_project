@extends('layout.main3')

@section('content')

<br><br>  <br><br>
@foreach($lesson as $less)
<script>
    jQuery(document).ready(function () {

        $('#send_get_request').on('click', function (e) {

            var lesson = "{{ $less->lesson_id }}";
            var user = "{{ $user->email }}";
            var url = "http://filesystem.vasilpenchev.com/count-lessons.json";
  
                  $.get(url, {lesson: lesson, user: user},'jsonp')
           ;
                    
                  
                 /*   
            jQuery.ajax({
                type: "GET",
                dataType: 'jsonp',
                url: url,
                success: function (data) {
                    console.log(data);
                },
                error: function(e){
                   // console.log(e);
                    
                }
            });*/
           
        });
    });
</script>

<div class="container">
    {{$lesson->links()}}    
    <div class="jumbotro">
        <div class="row">
            <div class="col-xs-6 col-md-6">
                <h4>{{ e($user->username) }} вашият урок е: № {{ $less->lesson_id}}</h4>
                <h4>{{$less->name}}</h4></div> 
            <div class="col-xs-12 col-md-12">
                @if($less->pics)
                <div class="col-xs-6 col-md-6"> 
                    <img class="img-responsive pics" src="{{ asset($less->pics)}}">
                </div>
                @endif

                <p class="text1">{{Markdown::parse(Str::limit($less->text, 30000))}}</p>

                @if($less->test)
                <p><b>За да продължите към следващия урок трябва да попълните теста към настоящия урок.</b></p>
                <p><a href="{{ URL::route('profile-test') }}" class="btn btn-xl" role="button">Тест</a> </p>
                @endif


            </div> 
        </div>
    </div>
    <div row>
        <div class="col-md-3">
            <button id="send_get_request" class="btn btn-default" type="button">Изпращане на данни за урока</button>
        </div>
    </div>
</div>  
@endforeach

{{$lesson->links()}}

@stop