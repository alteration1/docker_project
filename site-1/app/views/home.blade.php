@extends('layout.main1')

@section('content')

<!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section-heading">Курс за изучаване на Библията</h1>
                    <p class="lead section-lead">Има ли Бог? Кой е написал Библията? Има ли живот след смъртта? 
                        Вечната книга дава отговори на тези и още много други въпроси. 
                        Не пропускайте да се запознаете с най-издаваната и разпространявана книга на света - Библията.
                        Надникнете в древните пророчества, които разкриват бъдещето ни.
                        Предлагаме ви он-лайн курс състоящ се от 30 урока, 
                        чрез които ще може да се запознаете с основните учения на Библията. Уроците са написани от 
                    Агоп Тахмисян, изнесъл стотици беседи и лекции на библейска, морално-етична, здравна и научна тематика, 
                    автор на редица научно-богословски статии и книги като: "Библейска Космология", "Геологията и Библейския потоп",
                    "Библейски апокалипсис", "Даниил и човешката цивилизация" и др.</p>
                    
                </div>
            </div>
      @if(Auth::check())
                        @else
<div class="row">
    
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img data-src="holder.js/300x300"  src="{{asset($less1->pics)}}">
      <div class="caption">
        <h3>{{$less1->name}}</h3>
        <p class="te">{{Markdown::parse(Str::limit($less1->text, 100))}}</p>
        <p><a  href="{{ URL::route('showlesson',array('id'=>$less1->id)) }}"  class="btn btn-success" role="button">Виж урока</a> </p>
       </div>
    </div>
  </div>
    
     <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img data-src="holder.js/300x300"  src="{{asset($less2->pics)}}">
      <div class="caption">
        <h3>{{$less2->name}}</h3>
        <p class="te">{{Markdown::parse(Str::limit($less2->text, 100))}}</p>
        <p><a  href="{{ URL::route('showlesson',array('id'=>$less2->id)) }}"  class="btn btn-success" role="button">Виж урока</a> </p>
       </div>
    </div>
  </div>
  
<div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img data-src="holder.js/300x300"  src="{{asset($less3->pics)}}">
      <div class="caption">
        <h3>{{$less3->name}}</h3>
        <p class="te">{{Markdown::parse(Str::limit($less3->text, 80))}}</p>
        <p><a  href="{{ URL::route('showlesson',array('id'=>$less3->id)) }}"  class="btn btn-success" role="button">Виж урока</a> </p>
       </div>
    </div>
  </div>
    
 <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img data-src="holder.js/300x300"  src="{{asset($less4->pics)}}">
      <div class="caption">
        <h3>{{$less4->name}}</h3>
        <p class="te">{{Markdown::parse(Str::limit($less4->text, 100))}}</p>
        <p><a  href="{{ URL::route('showlesson',array('id'=>$less4->id)) }}"  class="btn btn-success" role="button">Виж урока</a> </p>
       </div>
    </div>
  </div>
                        
 </div>
                        
                        <div class="row">
    
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img data-src="holder.js/300x300"  src="{{asset($less5->pics)}}">
      <div class="caption">
        <h3>{{$less5->name}}</h3>
        <p class="te">{{Markdown::parse(Str::limit($less5->text, 100))}}</p>
        <p><a  href="{{ URL::route('showlesson',array('id'=>$less5->id)) }}"  class="btn btn-success" role="button">Виж урока</a> </p>
       </div>
    </div>
  </div>
    
     <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img data-src="holder.js/300x300"  src="{{asset($less6->pics)}}">
      <div class="caption">
        <h3>{{$less6->name}}</h3>
        <p class="te">{{Markdown::parse(Str::limit($less6->text, 80))}}</p>
        <p><a  href="{{ URL::route('showlesson',array('id'=>$less6->id)) }}"  class="btn btn-success" role="button">Виж урока</a> </p>
       </div>
    </div>
  </div>
  
<div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img data-src="holder.js/300x300"  src="{{asset($less7->pics)}}">
      <div class="caption">
        <h3>{{$less7->name}}</h3>
        <p class="te">{{Markdown::parse(Str::limit($less7->text, 80))}}</p>
        <p><a  href="{{ URL::route('showlesson',array('id'=>$less7->id)) }}"  class="btn btn-success" role="button">Виж урока</a> </p>
       </div>
    </div>
  </div>
    
 <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img data-src="holder.js/300x300"  src="{{asset($less8->pics)}}">
      <div class="caption">
        <h3>{{$less8->name}}</h3>
        <p class="te">{{Markdown::parse(Str::limit($less8->text, 90))}}</p>
        <p><a  href="{{ URL::route('showlesson',array('id'=>$less8->id)) }}"  class="btn btn-success" role="button">Виж урока</a> </p>
       </div>
    </div>
  </div>
                        
 </div>
                        
                        <div class="row">
    
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img data-src="holder.js/300x300"  src="{{asset($less9->pics)}}">
      <div class="caption">
        <h3>{{$less9->name}}</h3>
        <p class="te">{{Markdown::parse(Str::limit($less9->text, 110))}}</p>
        <p><a  href="{{ URL::route('showlesson',array('id'=>$less9->id)) }}"  class="btn btn-success" role="button">Виж урока</a> </p>
       </div>
    </div>
  </div>
    
     <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img data-src="holder.js/300x300"  src="{{asset($less10->pics)}}">
      <div class="caption">
        <h3>{{$less10->name}}</h3>
        <p class="te">{{Markdown::parse(Str::limit($less10->text, 120))}}</p>
        <p><a  href="{{ URL::route('showlesson',array('id'=>$less10->id)) }}"  class="btn btn-success" role="button">Виж урока</a> </p>
       </div>
    </div>
  </div>
  
<div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img data-src="holder.js/300x300"  src="{{asset($less11->pics)}}">
      <div class="caption">
        <h3>{{$less11->name}}</h3>
        <p class="te">{{Markdown::parse(Str::limit($less11->text, 130))}}</p>
        <p><a  href="{{ URL::route('showlesson',array('id'=>$less11->id)) }}"  class="btn btn-success" role="button">Виж урока</a> </p>
       </div>
    </div>
  </div>
    
 <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img data-src="holder.js/300x300"  src="{{asset($less12->pics)}}">
      <div class="caption">
        <h3>{{$less12->name}}</h3>
        <p class="te">{{Markdown::parse(Str::limit($less12->text, 100))}}</p>
        <p><a  href="{{ URL::route('showlesson',array('id'=>$less12->id)) }}"  class="btn btn-success" role="button">Виж урока</a> </p>
       </div>
    </div>
  </div>
                        
 </div>
                        
                        
                        <p class="section-paragraph">
                    За да започнете курса трябва да се регистрирате и да влезете в профила си.</p>
                    @endif
                </div>
            
    </section>

@stop