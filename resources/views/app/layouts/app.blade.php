<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','index')</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="{{asset('assets/src/js/jquery.min.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="preload" href="{{asset('assets/src/css/style.css')}}" as="style">
    <link rel="stylesheet" href="{{asset('assets/src/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/src/css/slick.min.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@600&family=PT+Sans+Narrow&display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@600&family=PT+Sans+Narrow&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    <!--    .............SERVICES.......................................-->
    <link rel="stylesheet" href="{{asset('assets/src/css/services/services.css')}}">
    <!--    ...............FAQ.........................................-->
    <link rel="stylesheet" href="{{asset('assets/src/css/faq/faq.css')}}">
    <!--    ...............ROAD MAP.........................................-->
    <link rel="stylesheet" href="{{asset('assets/src/css/roadMap/roadMap.css')}}">
    <!--    ...............About Us..........................................-->
    <link rel="stylesheet" href="{{asset('assets/src/css/aboutus/aboutUs.css')}}">
    <!--    ...............News..........................................-->
    <link rel="stylesheet" href="{{asset('assets/src/css/news/news.css')}}">

{{--    <script src="https://code.jquery.com/jquery-3.3.1.min.js"--}}
{{--        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"--}}
{{--        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"--}}
{{--        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"--}}
{{--        crossorigin="anonymous"></script>--}}

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body data-title="home_page">


@include('app.layouts.header')
@yield('content')
@include('app.layouts.login')
@include('app.layouts.footer')



@stack('scripts')


</body>

</html>
