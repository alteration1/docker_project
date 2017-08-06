@extends('layout.main2')

@section('content')
<!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><b>Безплатен онлайн курс</b></div>
                <div class="intro-heading">Семейството</div>
                
                <a href="#about" class="page-scrol btn btn-xl">
                         Научете повече
                    </a>
            </div>
        </div>
    </header>


<!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Семейството</h2>
                    <h3 class="section-subheading text-muted">Безплатен он-лайн курс за отношенията 
                        в семейството и възпитанието на децата</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/ov1a.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Отношенията в семейството</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"> Имаме удоволствието да ви представим 14 лекции на тема отношенията 
                                        в семейството и възпитанието на децата. Уроците са разработени от психолози специалисти 
                                        по семейно консултиране. По един много достъпен и практичен начин, с много примери, предлагат
                                        помощ при разрешаване на част от проблемите, които възникват в семейството.
   
</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/ov2a.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                 <h4 class="subheading">Общуването: Как се получават недоразуменията?</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Хората днес се подготвят много повече, за да получат шофьорска книжка, 
                                        отколкото брачното си свидетелство – а ние се чудим защо има толкова много жертви на 
                                        катастрофи по улицата на любовта! Това е лудост.  
                               Този курс съдържа теми, касаещи всеки човек– сeкс и пари, 
                        гняв и конфликти, семейни въпроси от рода на -
                              как да приемем родителите на партньора си. 
                         </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/fam1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Възпитание! </h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">  Мнозина се гмуркат или се втурват в него, 
                                        без много да мислят, а най-често - карайки на автопилот. Точно това не би  
                                        се случило с вас, ако си направите труда да участвате в курс като този. 
</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/kids.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                 <h4 class="subheading">Нашата цел</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Целта ни е да представим положителните духовни ценности и 
                                        уменията за поддържане на отношенията, защото вярваме, че те са свързани с
                                        щастието на човека, и на обществото като цяло. Вярваме, че семейният живот
                                        трябва да предложи спокойна и щастлива атмосфера, където  всеки може да се 
                                        радва на истинско личностно израстване. Вярваме, че децата заслужават любов, нежност,
                                        грижа и добър пример. 
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Разгледайте 
                                    <br>някои от
                                    <br>уроците
                                    <br><span class="glyphicon glyphicon-arrow-down"></span></h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


<!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Семейството</h2>
                    <h3 class="section-subheading text-muted">Рагледайте някои от уроците, които ви предлагаме.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset($less1->pics)}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{$less1->name}}</h4>
                        <p class="text-muted">Урок №{{$less1->id}}</p>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset($less2->pics)}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{$less2->name}}</h4>
                        <p class="text-muted">Урок №{{$less2->id}}</p>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset($less3->pics)}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{$less3->name}}</h4>
                        <p class="text-muted">Урок №{{$less3->id}}</p>
                    </div>
                </div>
               
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset($less4->pics)}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{$less4->name}}</h4>
                        <p class="text-muted">Урок №{{$less4->id}}</p>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset($less5->pics)}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{$less5->name}}</h4>
                        <p class="text-muted">Урок №{{$less5->id}}</p>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset($less6->pics)}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{$less6->name}}</h4>
                        <p class="text-muted">Урок №{{$less6->id}}</p>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset($less7->pics)}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{$less7->name}}</h4>
                        <p class="text-muted">Урок №{{$less7->id}}</p>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset($less8->pics)}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{$less8->name}}</h4>
                        <p class="text-muted">Урок №{{$less8->id}}</p>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset($less9->pics)}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{$less9->name}}</h4>
                        <p class="text-muted">Урок №{{$less9->id}}</p>
                    </div>
                </div>
                
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal10" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset($less10->pics)}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{$less10->name}}</h4>
                        <p class="text-muted">Урок №{{$less10->id}}</p>
                    </div>
                </div>
                
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal11" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset($less11->pics)}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{$less11->name}}</h4>
                        <p class="text-muted">Урок №{{$less11->id}}</p>
                    </div>
                </div>
                
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal12" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset($less12->pics)}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{$less12->name}}</h4>
                        <p class="text-muted">Урок №{{$less12->id}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-center">{{$less1->name}}</h2>
                            <p class="item-intro text-muted text-center">Урок №{{$less1->id}}</p>
                            <div class="col-lg-12">
                            <img class="img-responsive" src="{{ asset($less1->pics2)}}" alt="">
                            </div>
                            <p class="text1"> {{Markdown::parse(Str::limit($less1->text, 1000))}}</p>
                            <p><b>За да прочетете целият урок трябва да се регистрирате. </b></p>
                            <p class="text-center"><a href="{{ URL::route('account-create') }}" class="btn btn-success btn-lg" role="button">Регистрация</a>
             </p>
                            
                            <p class="text-center"><button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Назад</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
       
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-center">{{$less2->name}}</h2>
                            <p class="item-intro text-muted text-center">Урок №{{$less2->id}}</p>
                            <div class="col-lg-12">
                            <img class="img-responsive" src="{{ asset($less2->pics2)}}" alt="">
                            </div>
                            <p class="text1"> {{Markdown::parse(Str::limit($less2->text, 1000))}}</p>
                            <p><b>За да прочетете целият урок трябва да се регистрирате. </b></p>
                            <p class="text-center"><a href="{{ URL::route('account-create') }}" class="btn btn-success btn-lg" role="button">Регистрация</a>
             </p>
                            
                            <p class="text-center"><button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Назад</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-center">{{$less3->name}}</h2>
                            <p class="item-intro text-muted text-center">Урок №{{$less3->id}}</p>
                            <div class="col-lg-12">
                            <img class="img-responsive" src="{{ asset($less3->pics2)}}" alt="">
                            </div>
                            <p class="text1"> {{Markdown::parse(Str::limit($less3->text, 1000))}}</p>
                            <p><b>За да прочетете целият урок трябва да се регистрирате. </b></p>
                            <p class="text-center"><a href="{{ URL::route('account-create') }}" class="btn btn-success btn-lg" role="button">Регистрация</a>
             </p>
                            
                            <p class="text-center"><button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Назад</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-center">{{$less4->name}}</h2>
                            <p class="item-intro text-muted text-center">Урок №{{$less4->id}}</p>
                            <div class="col-lg-12">
                            <img class="img-responsive" src="{{ asset($less4->pics2)}}" alt="">
                            </div>
                            <p class="text1"> {{Markdown::parse(Str::limit($less4->text, 1000))}}</p>
                            <p><b>За да прочетете целият урок трябва да се регистрирате. </b></p>
                            <p class="text-center"><a href="{{ URL::route('account-create') }}" class="btn btn-success btn-lg" role="button">Регистрация</a>
             </p>
                            
                            <p class="text-center"><button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Назад</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-center">{{$less5->name}}</h2>
                            <p class="item-intro text-muted text-center">Урок №{{$less5->id}}</p>
                            <div class="col-lg-12">
                            <img class="img-responsive" src="{{ asset($less5->pics2)}}" alt="">
                            </div>
                            <p class="text1"> {{Markdown::parse(Str::limit($less5->text, 1000))}}</p>
                            <p><b>За да прочетете целият урок трябва да се регистрирате. </b></p>
                            <p class="text-center"><a href="{{ URL::route('account-create') }}" class="btn btn-success btn-lg" role="button">Регистрация</a>
             </p>
                            
                            <p class="text-center"><button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Назад</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-center">{{$less6->name}}</h2>
                            <p class="item-intro text-muted text-center">Урок №{{$less6->id}}</p>
                            <div class="col-lg-12">
                            <img class="img-responsive" src="{{ asset($less6->pics2)}}" alt="">
                            </div>
                            <p class="text1"> {{Markdown::parse(Str::limit($less6->text, 1000))}}</p>
                            <p><b>За да прочетете целият урок трябва да се регистрирате. </b></p>
                            <p class="text-center"><a href="{{ URL::route('account-create') }}" class="btn btn-success btn-lg" role="button">Регистрация</a>
             </p>
                            
                            <p class="text-center"><button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Назад</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Portfolio Modal 7 -->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-center">{{$less7->name}}</h2>
                            <p class="item-intro text-muted text-center">Урок №{{$less7->id}}</p>
                            <div class="col-lg-12">
                            <img class="img-responsive" src="{{ asset($less7->pics2)}}" alt="">
                            </div>
                            <p class="text1"> {{Markdown::parse(Str::limit($less7->text, 1000))}}</p>
                            <p><b>За да прочетете целият урок трябва да се регистрирате. </b></p>
                            <p class="text-center"><a href="{{ URL::route('account-create') }}" class="btn btn-success btn-lg" role="button">Регистрация</a>
             </p>
                            
                            <p class="text-center"><button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Назад</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Portfolio Modal 8 -->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-center">{{$less8->name}}</h2>
                            <p class="item-intro text-muted text-center">Урок №{{$less8->id}}</p>
                            <div class="col-lg-12">
                            <img class="img-responsive" src="{{ asset($less8->pics2)}}" alt="">
                            </div>
                            <p class="text1"> {{Markdown::parse(Str::limit($less8->text, 1000))}}</p>
                            <p><b>За да прочетете целият урок трябва да се регистрирате. </b></p>
                            <p class="text-center"><a href="{{ URL::route('account-create') }}" class="btn btn-success btn-lg" role="button">Регистрация</a>
             </p>
                            
                            <p class="text-center"><button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Назад</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Portfolio Modal 9 -->
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-center">{{$less9->name}}</h2>
                            <p class="item-intro text-muted text-center">Урок №{{$less9->id}}</p>
                            <div class="col-lg-12">
                            <img class="img-responsive" src="{{ asset($less9->pics2)}}" alt="">
                            </div>
                            <p class="text1"> {{Markdown::parse(Str::limit($less9->text, 1000))}}</p>
                            <p><b>За да прочетете целият урок трябва да се регистрирате. </b></p>
                            <p class="text-center"><a href="{{ URL::route('account-create') }}" class="btn btn-success btn-lg" role="button">Регистрация</a>
             </p>
                            
                            <p class="text-center"><button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Назад</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Portfolio Modal 10 -->
    <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-center">{{$less10->name}}</h2>
                            <p class="item-intro text-muted text-center">Урок №{{$less10->id}}</p>
                            <div class="col-lg-12">
                            <img class="img-responsive" src="{{ asset($less10->pics2)}}" alt="">
                            </div>
                            <p class="text1"> {{Markdown::parse(Str::limit($less10->text, 1000))}}</p>
                            <p><b>За да прочетете целият урок трябва да се регистрирате. </b></p>
                            <p class="text-center"><a href="{{ URL::route('account-create') }}" class="btn btn-success btn-lg" role="button">Регистрация</a>
             </p>
                            
                            <p class="text-center"><button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Назад</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Portfolio Modal 11 -->
    <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-center">{{$less11->name}}</h2>
                            <p class="item-intro text-muted text-center">Урок №{{$less11->id}}</p>
                            <div class="col-lg-12">
                            <img class="img-responsive" src="{{ asset($less11->pics2)}}" alt="">
                            </div>
                            <p class="text1"> {{Markdown::parse(Str::limit($less11->text, 1000))}}</p>
                            <p><b>За да прочетете целият урок трябва да се регистрирате. </b></p>
                            <p class="text-center"><a href="{{ URL::route('account-create') }}" class="btn btn-success btn-lg" role="button">Регистрация</a>
             </p>
                            
                            <p class="text-center"><button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Назад</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Portfolio Modal 12 -->
    <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-center">{{$less12->name}}</h2>
                            <p class="item-intro text-muted text-center">Урок №{{$less12->id}}</p>
                            <div class="col-lg-12">
                            <img class="img-responsive" src="{{ asset($less12->pics2)}}" alt="">
                            </div>
                            <p class="text1"> {{Markdown::parse(Str::limit($less12->text, 1000))}}</p>
                            <p><b>За да прочетете целият урок трябва да се регистрирате. </b></p>
                            <p class="text-center"><a href="{{ URL::route('account-create') }}" class="btn btn-success btn-lg" role="button">Регистрация</a>
             </p>
                            
                            <p class="text-center"><button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Назад</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop