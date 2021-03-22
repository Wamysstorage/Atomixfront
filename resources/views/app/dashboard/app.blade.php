<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','index')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/header/header.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/menu/menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/atomixLife/atomixLife.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/settings/settings.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/dashboardMainContent/dashboardMainContent.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/partnersFirstPage/partnersFirstPage.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/partnersSecondPage/partnersSecondPage.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/footer/footer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/investments/investments.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/myServices/myServices.css')}}">


    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@500&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>


@include('app.dashboard.header')
<div class="allContentContainer" id="allContant">
@yield('content')
</div>
@include('app.dashboard.footer')
