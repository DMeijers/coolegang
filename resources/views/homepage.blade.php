@include('essentials.head')
@include('essentials.nav')
<head>
    <title>Ananas</title>
</head>
<body style="height: 100%;">
<div class="uk-background-muted uk-background-cover"
     style="height: 100%; background-image: url({{URL::asset('images/ananas.jpg')}})">
    <div class=".uk-column-1-3">
        @yield('header')
        <div class="uk-container uk-container-large">
            @yield('content')
        </div>
    </div>
</div>
</body>
