<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <base href="/" />
    <meta name="keywords" content="курс" />
    <meta name="author" content="Super User" />
    <meta name="description" content="курс" />


    <title>Виртуализация</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic" rel="stylesheet"> -->
{{ HTML::style('css/style5.css') }}
    <!-- Bootstrap Core CSS -->
    {{ HTML::style('css/bootstrap.min.css') }}
    <!-- Custom CSS -->
    {{ HTML::style('css/agency.css') }}
    <!-- Custom Fonts -->
   {{ HTML::style('font-awesome-4.1.0/css/font-awesome.min.css') }}
   {{ HTML::style('http://fonts.googleapis.com/css?family=Montserrat:400,700') }}
   {{ HTML::style('http://fonts.googleapis.com/css?family=Kaushan+Script') }}
        {{ HTML::style('http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic') }}
        {{ HTML::style('http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700') }}
      <link media="all" rel="apple-touch-icon" sizes="57x57" href="{{ asset('css/apple-touch-icon-57x57.png') }}">
<link media="all" rel="apple-touch-icon" sizes="114x114" href="{{ asset('css/apple-touch-icon-114x114.png') }}">
<link media="all" rel="apple-touch-icon" sizes="72x72" href="{{ asset('css/apple-touch-icon-72x72.png') }}">
<link media="all" rel="apple-touch-icon" sizes="144x144" href="{{ asset('css/apple-touch-icon-144x144.png') }}">
<link media="all" rel="apple-touch-icon" sizes="60x60" href="{{ asset('css/apple-touch-icon-60x60.png') }}">
<link media="all" rel="apple-touch-icon" sizes="120x120" href="{{ asset('css/apple-touch-icon-120x120.png') }}">
<link media="all" rel="apple-touch-icon" sizes="76x76" href="{{ asset('css/apple-touch-icon-76x76.png') }}">
<link media="all" rel="apple-touch-icon" sizes="152x152" href="{{ asset('css/apple-touch-icon-152x152.png') }}">
<link media="all" rel="apple-touch-icon" sizes="180x180" href="{{ asset('css/apple-touch-icon-180x180.png') }}">
<link media="all" rel="icon" type="image/png" href="{{ asset('css/favicon-192x192.png') }}" sizes="192x192">
<link media="all" rel="icon" type="image/png" href="{{ asset('css/favicon-160x160.png') }}" sizes="160x160">
<link media="all" rel="icon" type="image/png" href="{{ asset('css/favicon-96x96.png') }}" sizes="96x96">
<link media="all" rel="icon" type="image/png" href="{{ asset('css/favicon-16x16.png') }}" sizes="16x16">
<link media="all" rel="icon" type="image/png" href="{{ asset('css/favicon-32x32.png') }}" sizes="32x32">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script src='https://www.google.com/recaptcha/api.js?hl=bg'></script>
         <script type="text/javascript">
                    var RecaptchaOptions = {
                    theme: 'blackglass'
                    };
         </script>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="{{ URL::route('home') }}">Начало</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    @if(Auth::check())               
               <li><a  class="page-scroll" href="{{ URL::route('profile-user') }}">Вашият урок</a></li>
               <li><a class="page-scroll" href="{{ URL::route('profile-lessons') }}">Завършени уроци</a></li>
               <li><a class="page-scroll" href="{{ URL::route('contact') }}">Контакти</a></li>
               <li><a class="page-scroll" href="{{ URL::route('links') }}">Връзки</a></li>
               <li><a class="page-scroll" href="{{ URL::route('account-change-password') }}">Смяна на парола</a></li>               
               <li><a class="page-scroll" href="{{ URL::route('account-sign-out') }}">Изход</a></li>
             @else
             <li><a class="page-scroll" href="{{ URL::route('account-sign-in') }}"><b>Вход</b></a></li>
             <li><a class="page-scroll" href="{{ URL::route('account-create') }}"><b> Регистрация</b></a></li>
             <li><a class="page-scroll"  href="{{ URL::route('account-forgot-password') }}"><b>Забравена парола</b></a></li>
             <li class="last"><a class="page-scroll" href="{{ URL::route('questions') }}"><b>Контакти</b></a></li>
             @endif
                </ul>
                    
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

   
      @yield('content') 
     
            
   
   <!-- <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright"></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons"> -->
                       <!-- <li><a href="#"><i class="fa fa-twitter"></i></a> -->
                        <!-- </li>
                        <li>
                        </li> -->
                       <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a> -->
                        <!-- </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li>
                        </li>
                        <li><a href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <hr />
                    <p>&copy; Copyright 2017</p>
                </div>
            </div>
           
        </div>
       
    </footer>

    


   
    <!-- jQuery Version 1.11.0 -->
    {{ HTML::script('js/jquery-1.11.0.js') }}
    
    <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('js/bootstrap.min.js') }}
    
    <!-- Plugin JavaScript -->
    {{ HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') }}
     {{ HTML::script('js/classie.js') }}
     {{ HTML::script('js/cbpAnimatedHeader.js') }}
    

    <!-- Contact Form JavaScript -->
     {{ HTML::script('js/jqBootstrapValidation.js') }}
         {{ HTML::script('js/contact_me.js') }}
    

    <!-- Custom Theme JavaScript -->
     {{ HTML::script('js/agency.js') }}

</body>

</html>