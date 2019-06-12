<nav uk-navbar>
    <div class="uk-navbar-left">

        <a href="#offcanvas-usage" uk-toggle><span class="pl-4" uk-icon="menu"></span></a>

        <div id="offcanvas-usage" uk-offcanvas>
            <div class="uk-offcanvas-bar">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>Title</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            </div>
        </div>

    </div>
    <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
            <a href="{{url('/')}}" class="uk-navbar-item uk-logo">Ananas</a>
        </ul>
    </div>
    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
            <li><a href="{{url('/login')}}">Login</a></li>
            <li><a href="{{url('/register')}}">Register</a></li>
            <li>
                <a href="#">Profile</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-nav-header">Here comes a name</li>
                        <li class="uk-active"><a href="#">Account settings</a></li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-nav-header">Friends</li>
                        <li><a href="#">Chat</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
