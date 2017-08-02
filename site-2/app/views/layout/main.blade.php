<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/style5.css') }}
   
    <link media="all" rel="icon" type="image/png" href="{{ asset('css/favicon-96x96.png') }}" />
     <link media="all" type="image/x-icon" rel="shortcut icon" href="{{ asset('css/favicon-16x16.png') }}"/>
     <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('css/favicon-32x32.png') }}">

     <title>  Filesystem </title>  
     
    </head>
    <body>
         
           
       @include('layout.navigation')  
        <header class="">
           <img class="img-responsive img-center" src="{{ asset('css/abstract.jpg') }}">
           <div class=""><form action="{{ URL::route('language-chooser') }}" method="post">
    <select name="locale">
        <option value="en">English</option>
        <option value="bg">Български</option>
    </select>
      <input type="submit" value="Choose">
    {{ Form::token() }}
</form></div>
    </header>
        <div class="container"><br>
            
        @if(Session::has('global'))
        <p>{{ Session::get('global') }}</p>
        @endif
           
      @yield('content') 
       
       
        <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; j'simmer</p>
                </div>
            </div>
           
        </div>
       
    </footer>
          <!-- jQuery Version 1.11.0 -->
      {{ HTML::script('js/jquery-1.11.0.js') }}
      
    <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('js/bootstrap.min.js') }}
    
    </body>
</html>