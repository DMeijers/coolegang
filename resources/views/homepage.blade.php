@include('essentials.head')
	<head>
		<title>Page Title</title>
	</head>
	<body>
		<div>
			<nav class="uk-navbar-container" uk-navbar>
				<div class="uk-navbar-left">
					<ul class="uk-navbar-nav">
						<li><a href="{{ route('homepage') }}">Home</a></li>
						<li><a href="{{ route('welcomepage') }}">Welcome</a></li>
					</ul>
				</div>
				<div class="uk-navbar-right">
					<ul class="uk-navbar-nav">
						<li><a href="{{ route('login') }}">Login</a></li>
						<li><a href="{{ route('register') }}">Register</a></li>
					</ul>
				</div>
			</nav>
		</div>

		<!-- Container -->
		<div class="uk-container uk-background-primary uk-width-1-3 uk-height-1 uk-position-center">
			<!-- Post -->
			<div class="uk-width-5-6"> 
				<!-- User -->
				<div class="">
					<!-- Profile picture -->
					<div>
					</div>
					<!-- Username -->
					<div>
					</div>
				</div>
			</div>
		</div>
	</body>
