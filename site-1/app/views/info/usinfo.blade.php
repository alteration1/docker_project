@extends('layout.main2')

@section('content')

<section>
@if(Auth::user()->role)
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <table class="table table-hover table-responsive">
                 <tr><th>№</th><th>Име</th><th>Имейл</th><th>№ урок</th><th>Създаден на</th><th>Обновен на</th></tr>
             @foreach ($users=User::paginate(20) as $user)
                            
                 <tr><td>{{$user->id}}</td><td>{{$user->username}}</td><td>{{$user->email}}</td>
                 <td>{{$user->lesson_id}}</td><td>{{$user->created_at}}</td><td>{{$user->updated_at}}</td></tr>
          
             @endforeach
              </table>
             {{ $users->links()}} 
    
        </div>
    </div>
    
</div>
@endif
</section>
@stop