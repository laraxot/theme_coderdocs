<head>
    {!! Theme::metatags() !!}
    {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css','themes/coderdocs') }}"> --}}
    @php
        //Theme::add('/theme/bc/bootstrap/dist/css/bootstrap.css');
        //Theme::add('pub_theme::assets/fontawesome/js/all.min.js');
        //Theme::add('pub_theme::css/app.css');
        Theme::add('pub_theme::dist/css/app.css');
        Theme::add('pub_theme::assets/css/theme.css');
        Theme::add('pub_theme::css/prism.css');
        Theme::add('pub_theme::css/xot.css');

        Theme::add('pub_theme::dist/css/app.css');

    @endphp
    {!! Theme::showStyles(false) !!}
    @livewireStyles
    @stack('styles')
</head>
