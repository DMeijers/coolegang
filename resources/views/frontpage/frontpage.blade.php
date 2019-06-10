@extends('homepage')

@section('header')
    <hr class="uk-divider-icon">
    <h1 class="uk-heading-medium uk-text-center">Welkom to Ananas</h1>
    <hr class="uk-divider-icon">
@endsection

@section('content')
    <div class="uk-box-shadow-large uk-child-width-expand@s uk-text-center" uk-grid>
        <div class="pb-5">
            <h2>Friend</h2>
            <input class="uk-input" type="text" placeholder="Input">
            <h2>Friend2</h2>
            <input class="uk-input" type="text" placeholder="Input">
        </div>
        <div>
            Global chat
        </div>
        <div>
            Follow list
        </div>
    </div>
@endsection