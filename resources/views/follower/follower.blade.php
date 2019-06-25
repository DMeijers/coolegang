@extends('homepage')

@section('content')
{{--    <div class="uk-container" style="background-color: lightgrey">--}}
{{--        <div class="uk-margin-large-left uk uk-width-large uk-padding uk-float-left" style="background-color: gray"></div>--}}
{{--        <div class="uk-margin-large-right uk-width-large uk-padding uk-float-right" style="background-color: gray"></div>--}}
{{--    </div>--}}
    <div class="mb-5 mt-3">
        <div class="uk-child-width-1-2 uk-text-center" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title">Followers</h3>
                    </div>
                    <div class="uk-card-body">
                        <p>I followings you</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title">Find people now</h3>
                    </div>
                    <div class="uk-card-body">
                        <input class="w-50" type="search">
                        <span class="uk-icon-button" uk-icon="search"></span>
                        <p>We could be frens</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
