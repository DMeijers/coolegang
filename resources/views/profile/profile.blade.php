@extends('homepage')

@section('header')
    <br>
    <br>
    <div style="background-color: deepskyblue">
        <hr class="uk-divider-icon">
        <h1 class="uk-heading-medium uk-text-center">Profile of {{Auth::user()->name}}</h1>
        <hr class="uk-divider-icon">
    </div>
    <br>
@endsection

@section('content')
    <div class=" mb-5">
        <div class="uk-child-width-1-3 uk-text-center" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title">Foto's</h3>
                    </div>
                    <div class="uk-card-body">
                        @for($i = 0; $i < 3; $i++)
                            <img src="{{asset('images/logo.png')}}">
                        @endfor
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title">Your Posts</h3>
                        <a class="uk-card uk-text-primary" href="{{url('/submitPost')}}">Upload a Post</a>
                    </div>
                    <div class="uk-card-body">
                        <p>here comes a posts</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title">Your Friends</h3>
                    </div>
                    <div class="uk-card-body">
                        <p>Gello i am fren</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
