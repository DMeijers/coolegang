@extends('homepage')

@section('header')
    <br>
    <br>
    <div style="background-color: deepskyblue">
        <hr class="uk-divider-icon">
        <h1 class="uk-heading-medium uk-text-center">Welcome to Ananas</h1>
        <hr class="uk-divider-icon">
    </div>
    <br>
@endsection

@section('content')
    <div class="pt-3 uk-box-shadow-large uk-child-width-expand@s uk-text-center" style="background-color: lightskyblue; opacity: 0.9;" uk-grid>
        <div class="pb-5">
            <h2>Friend</h2>
            <input class="uk-input" type="text" placeholder="Input">
            <h2>Friend2</h2>
            <input class="uk-input" type="text" placeholder="Input">
        </div>
        <div>
            <h2>Global chat</h2>
        </div>
        <div>
            <h2>Follow list</h2>
        </div>
    </div>
@endsection
