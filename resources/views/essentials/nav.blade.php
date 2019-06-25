<nav uk-navbar>
    <div class="uk-navbar-left">

        @if(Auth::user())
            <a href="#offcanvas-usage" uk-toggle="target: #offcanvas-nav-primary"><span class="pl-4"
                                                                                        uk-icon="menu"></span></a>

            <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
                <div class="uk-offcanvas-bar uk-flex uk-flex-column">
                    <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                        <li class="uk-nav-header">Friends</li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: comment"></span>Chat</a></li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-nav-header">Followers</li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: heart"></span>Following</a>
                        </li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-active"><a href="{{url('/profile')}}">Profile</a></li>
                        <li class="uk-active"><a href="{{url('/logout')}}">Logout</a></li>
                    </ul>
                </div>
            </div>
        @endif
    </div>
    <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
            <a href="{{url('/')}}" class="uk-navbar-item uk-logo">Ananas</a>
        </ul>
    </div>
    <div class="uk-navbar-right">
        @if(!Auth::user())
            <ul class="uk-navbar-nav">
                <li><a href="{{url('/login')}}">Login</a></li>
                <li><a href="{{url('/register')}}">Register</a></li>
            </ul>
        @else
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="{{ route('profile', ['id' => $user->id]) }}">{{$user->name}}</a></li>

            </ul>
        @endif
    </div>
</nav>
