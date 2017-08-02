<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="http://bible.izuchavai.me/" />
        <meta name="keywords" content="какво предлагаме, предложения, безплатна Библия, безплатни библии, безплатни курсове, безплатни книги, безплатно, безплатно обучение, безплатен курс, безплатна Библия, безплатна книга, изучавай ме" />
        <meta name="author" content="Super User" />
        <meta name="description" content="Искате да научите какъв е смисълът на човешкия живот, защо има толкова много страдания, как да прибавите живот към годините си, как да укрепите сeмейните връзки, кои са грешките, които се допускат  при възпитанието на децата?" />
        <title>{{$title}}</title>
        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/style.css') }}
        {{ HTML::style('css/style5.css') }}
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('css/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('css/apple-touch-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('css/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('css/apple-touch-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('css/apple-touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('css/apple-touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('css/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('css/apple-touch-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('css/apple-touch-icon-180x180.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('css/favicon-32x32.png') }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ asset('css/android-chrome-192x192.png') }}" sizes="192x192">
        <link rel="icon" type="image/png" href="{{ asset('css/favicon-96x96.png') }}" sizes="96x96">
        <link rel="icon" type="image/png" href="{{ asset('css/favicon-16x16.png') }}" sizes="16x16">
        <link rel="manifest" href="{{ asset('css/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src='https://www.google.com/recaptcha/api.js'></script>
         <script type="text/javascript">
                    var RecaptchaOptions = {
                    theme: 'blackglass'
                    };
         </script>
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
                        <li><a href="{{ URL::route('account-sign-out') }}">Изход</a></li>
                        <li><a href="{{ URL::route('account-change-password') }}">Смяна на парола</a></li>
                        <li><a href="{{ URL::route('profile-user') }}">Вашият урок</a></li>
                        <li><a href="{{ URL::route('profile-lessons') }}">Завършени уроци</a></li>
                        <li><a href="{{ URL::route('contact') }}">Контакти</a></li>
                        <li><a href="{{ URL::route('links') }}">Връзки</a></li>
                        @else
                        <li><a href="{{ URL::route('account-sign-in') }}"><b>Вход</b></a></li>
                        <li><a href="{{ URL::route('account-create') }}"><b> Регистрация</b></a></li>
                        <li class='last'><a href="{{ URL::route('account-forgot-password') }}"><b>Забравена парола</b></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <header class="">
            <img class="img-responsive img-center" src="{{ asset('css/11030108_10203653097784147_875850752_o.jpg') }}">
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