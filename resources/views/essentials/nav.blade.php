<nav class="uk-navbar-container " uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <a href="{{url('/')}}" class="uk-navbar-item uk-logo">Ananas</a>
        </ul>

    </div>
    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
            <li>
                <a href="#">Profile</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-nav-header">Here comes a name</li>
                        <li class="uk-active"><a href="#">Account settings</a></li>
                        <li class="uk-nav-header">Friends</li>
                        <li><a href="#">Chat</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="{{url('/login')}}">Login</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="{{url('/login')}}">Login</a></li>
            <li><a href="{{url('/register')}}">Register</a></li>
        </ul>
    </div>
</nav>