<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="" />
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')@show
    </title>
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">

    {!! Theme::style('css/app.css') !!}

</head>
<body>

@include('partials.navigation')

<div class="container">
    @yield('content')
</div>
@include('partials.footer')

{!! Theme::script('js/app.js') !!}
{!! Theme::script('vendor/lightbox2/dist/js/lightbox.min.js') !!}

@yield('javascript')

</body>
</html>
