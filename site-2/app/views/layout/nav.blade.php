<nav>
<div id='cssmenu'>
<ul>
    <li class='active'><a href="{{ URL::route('home') }}"><span>{{trans('home.home')}}</span></a></li>
    @if(Auth::check())
    <li><a href="{{ URL::route('account-sign-out') }}"><span>{{trans('home.sign_out')}}</span></a></li>
    <li><a href="{{ URL::route('account-change-password') }}"><span>{{trans('home.change_password')}}</span></a></li>
    <li><a href="{{ URL::route('profile-user') }}"><span>{{trans('home.your_account')}}</span></a></li>
    @else
    <li><a href="{{ URL::route('account-sign-in') }}"><span>{{trans('home.sign_in')}}</span></a></li>
    <li><a href="{{ URL::route('account-create') }}"><span>{{trans('home.create_account')}}</span></a></li>
   
    <li class='last'><a href="{{ URL::route('account-forgot-password') }}"><span>{{trans('home.forgot_password')}}</span></a></li>
    @endif
    
    
</ul>
</div>
    <div class="right"><form action="{{ URL::route('language-chooser') }}" method="post">
    <select name="locale">
        <option value="en">English</option>
        <option value="bg">Български</option>
    </select>
      <input type="submit" value="Choose">
    {{ Form::token() }}
</form></div>
</nav>   

