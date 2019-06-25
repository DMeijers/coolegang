@extends('homepage')

@section('header')
    <br>
    <br>
    <div style="background-color: deepskyblue">
        <hr class="uk-divider-icon">
        <h1 class="uk-heading-medium uk-text-center">Profile of {{$userprofile->name}}</h1>
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
                        <a class="uk-card uk-text-primary" href="{{url('/showSubmitPost')}}">Upload a Post</a>
                    </div>
                    <div class="uk-card-body">

                    @foreach($posts as $post)

                        <article class="uk-comment uk-margin-medium-bottom">
                            <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-comment-avatar" src="{{asset('images/logo.png')}}" width="80" height="80" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">{{$user->name}}</a></h4>
                                    <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                        <li><a href="#">{{ $post->created_at }}</a></li>
                                        <li><a href="#">Reply</a></li>
                                    </ul>
                                </div>
                            </header>
                            <div class="uk-comment-body">
                                <p>{{ $post->content }}</p>
                            </div>
                        </article>
                        
                    @endforeach

                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title">Your Friends</h3>
                    </div>
                    <div class="uk-card-body">
                        @foreach($allUsers as $alluser)
                        <a class="uk-margin-bottom uk-width-1-2" href="{{url('profile/' . $alluser->id)}} ">{{ $alluser->name }}</a>
                        <br>
                        <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
