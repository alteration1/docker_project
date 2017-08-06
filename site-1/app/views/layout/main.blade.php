<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="http://family.izuchavai.me/" />
    <meta name="keywords" content="какво предлагаме, предложения, безплатна Библия, семейство, отношения,деца, безплатни библии, безплатни курсове, безплатни книги, безплатно, безплатно обучение, безплатен курс, безплатна Библия, безплатна книга, изучавай ме" />
    <meta name="author" content="Super User" />
    <meta name="description" content="По един много достъпен и практичен начин, с много примери, уроците ни предлагат помощ при разрешаване на част от проблемите, които възникват в семейството и при възпитанието на децата." />

    <title>{{$title}}</title>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/style5.css') }}
    <link media="all" rel="icon" type="image/png" href="{{ asset('css/apple-touch-icon.png') }}" />
     <link media="all" type="image/x-icon" rel="shortcut icon" href="{{ asset('css/favicon.ico') }}"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src='https://www.google.com/recaptcha/api.js?hl=bg'></script>
</head>

<body>
   
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand"  href="{{ URL::route('home') }}"><b>Начало</b></a>
            </div>
           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
             @if(Auth::check())
               <li><a href="{{ URL::route('account-sign-out') }}">Отписване</a></li>
               <li><a href="{{ URL::route('account-change-password') }}">Смяна на парола</a></li>
               <li><a href="{{ URL::route('profile-user') }}">Вашият акаунт</a></li>
               <li><a href="{{ URL::route('profile-lessons') }}">Вашите уроци</a></li>
               <li><a href="{{ URL::route('contact') }}">Контакти</a></li>
             @else
             <li><a href="{{ URL::route('account-sign-in') }}"><b>Вписване</b></a></li>
             <li><a href="{{ URL::route('account-create') }}"><b> Регистрация</b></a></li>
             <li class='last'><a href="{{ URL::route('account-forgot-password') }}"><b>Забравена парола</b></a></li>
             @endif
                </ul>
            </div>
        </div>
    </nav>

    <header class="">
         <img class="img-responsive img-center" src="{{ asset('css/bible5.jpg') }}">
    </header>

<div class="container"><br>
      
    @if(Session::has('global'))
    <p class="text">{{ Session::get('global') }}</p>
        @endif
       @yield('content') 
    

           </div>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; izuchavai.me</p>
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