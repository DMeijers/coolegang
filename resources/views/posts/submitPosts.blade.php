@include('essentials.head');
@include('essentials.nav');

<body style="height: 100%;">
    <div class="uk-background-muted uk-background-cover"
         style="min-height: 100%; background-image: url({{URL::asset('images/ananas.jpg')}})">

        <div class="uk-container uk-width-1-3 ">
            <form class="uk-margin-large-top uk-background-muted uk-padding" action="#" method="post">
                @csrf
                <fieldset class="uk-fieldset">

                    <legend class="uk-legend">Upload Post</legend>

                      <div class="uk-margin">
                            <textarea class="uk-textarea" rows="5" name="content" placeholder="Content"></textarea>
                      </div>

                      <button class="uk-widht-1-1 uk-button uk-button-primary">Submit</button>

                </fieldset>
            </form>
        </div>

    </div>
</body>