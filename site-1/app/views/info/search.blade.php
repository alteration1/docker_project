@extends('layout.main1')
@section('content')
@if(Auth::user()->role)
<div class="container">
    <div class="row"> 
        <div class="col-md-6" style="font-family: sans-serif;"><h3>Намери потребител по електронната му поща.</h3></div>
        <div class='col-md-12'> 

            <form method="post" action="{{ URL::route('search-post') }}">


                <div class='col-md-6'> 
                    <input type="text" placeholder="Електронна поща" name="email" class="form-control">
                </div>
                <div class='col-md-4'> 
                    <button type="submit"  class="btn">Намери</button>  
                </div>


                {{ Form::token()}}
            </form><br><br>

        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <table class="table table-hover table-responsive">

                <tr><th>№</th><th>Име</th><th>Имейл</th><th>№ урок</th><th>Създаден на</th><th>Обновен на</th></tr>
                @if($users)
                @foreach ($users as $user)

                <tr><td>{{$user->id}}</td><td>{{$user->username}}</td><td>{{$user->email}}</td>

                    <td>{{$user->lesson_id}}</td><td>{{$user->created_at}}</td><td>{{$user->updated_at}}</td></tr>

                @endforeach

                @endif
            </table>

        </div>        
    </div>    
</div>
@endif
@stop