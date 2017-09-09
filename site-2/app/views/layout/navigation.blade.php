


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="pull-right">
               <form action="{{ URL::route('language-chooser') }}" method="post" class="form-inline" >
                   <div class="form-group">
                        <select name="locale" class="form-control" onchange="this.form.submit()">
                            <option value="0">{{trans('home.lng')}}</option>
                            <option value="en">English</option>
                            <option value="bg">Български</option>
                        </select>
                    </div>
                    <input type="submit" value="Choose" class="btn btn-default">
                    {{ Form::token() }}
                </form>
            </div>
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand"  href="{{ URL::route('home') }}"><b>{{trans('home.home')}}</b></a>
            </div>
           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
             @if(Auth::check())
               <li><a href="{{ URL::route('account-sign-out') }}">{{trans('home.sign_out')}}</a></li>
               <li><a href="{{ URL::route('account-change-password') }}">{{trans('home.change_password')}}</a></li>
               <li><a href="{{ URL::route('profile-user') }}">{{trans('home.your_account')}}</a></li>
               
             @else
             <li><a href="{{ URL::route('account-sign-in') }}"><b>{{trans('home.sign_in')}}</b></a></li>
             <li><a href="{{ URL::route('account-create') }}"><b> {{trans('home.create_account')}}</b></a></li>
             <li class='last'><a href="{{ URL::route('account-forgot-password') }}"><b>{{trans('home.forgot_password')}}</b></a></li>
             @endif
                </ul>
            </div>
        </div>
    </nav>
