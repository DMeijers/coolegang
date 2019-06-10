@include('essentials.head')
@include('essentials.nav')
	<head>
		<title>Ananas</title>
	</head>
	<body style="height: 100%;">
	<div class="uk-background-muted uk-background-cover" style="height: 100%;">

		@yield('header')
		<div class="uk-container uk-container-large">
		@yield('content')
		</div>
	</div>
	</body>