@include('essentials.head')
@include('essentials.nav')
	<head>
		<title>Ananas</title>
	</head>
	<body style="height: 100%;">
	<div class="uk-background-muted uk-background-cover" style="height: 100%;">

		<div>

		</div>

		<!-- Container -->
		<div class="uk-container uk-background-default uk-width-2-3 uk-height-1 uk-position-center">
			@yield('content')
		</div>
	</div>
	</body>