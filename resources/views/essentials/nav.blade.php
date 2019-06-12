<nav uk-navbar>
    <div class="uk-navbar-left">

        <a href="#offcanvas-usage" uk-toggle="target: #offcanvas-nav-primary"><span class="pl-4" uk-icon="menu"></span></a>

        <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar uk-flex uk-flex-column">

                <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                    <li class="uk-active"><a href="#">Active</a></li>
                    <li class="uk-parent">
                        <a href="#">Parent</a>
                        <ul class="uk-nav-sub">
                            <li><a href="#">Sub item</a></li>
                            <li><a href="#">Sub item</a></li>
                        </ul>
                    </li>
                    <li class="uk-nav-header">Header</li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
                </ul>

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
