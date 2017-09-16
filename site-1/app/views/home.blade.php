@extends('layout.main2')

@section('content')
<!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><b>Онлайн курс</b></div>
                <div class="intro-heading">Виртуализация</div>
                
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
                    <h2 class="section-heading">Виртуализация</h2>
                    <h3 class="section-subheading text-muted">Oн-лайн курс</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src='{{asset("img/comp600x365.jpg") }}' alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Хардуерната (Платформената) виртуализация</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"> Хардуерната (Платформената) виртуализация е виртуализация на компютри или операционни системи. Тя скрива физическите характеристики на компютърната платформа от потребителите, като вместо това показва друга емулирана компютърна платформа.
   
</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src='{{asset("img/comp600x365.jpg") }}' alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                 <h4 class="subheading">Сървърна виртуализация</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Сървърната виртуализация е следващото поколение на сървърната среда, което има за цел да повиши ефективността и да се справи с ограниченията в ИТ инфраструктурата.
                                     
                         </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src='{{asset("img/comp600x365.jpg") }}' alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Ресурсна и мрежова виртуализация </h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">  Виртуализация на специфични системни ресурси, като, например, виртуално хранилище  (сторидж дискове) или мрежови ресурси е ресурсна виртуализация. 
</p>
                                </div>
                            </div>
                        </li>
                 @if(!Auth::check())      
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Разгледайте 
                                    <br>някои от
                                    <br>уроците
                                    <br><span class="glyphicon glyphicon-arrow-down"></span></h4>
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>

 @if(!Auth::check())
<!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Виртуализация</h2>
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
@endif
@stop