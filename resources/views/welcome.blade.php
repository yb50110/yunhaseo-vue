<!doctype html>

<!--
Site designed and developed by: Yun Ha Seo
Dec 2017
-->

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Yunha's Space</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
    </head>

    <body>

    @include('header')

    {{--<div class="pt-triggers">--}}
        {{--<div id="dl-menu" class="dl-menuwrapper">--}}
            {{--<button class="dl-trigger">Choose a transition</button>--}}
            {{--<ul class="dl-menu">--}}
                {{--<li data-animation="11"><a href="#">Fade top / Fade bottom</a></li>--}}
                {{--<li data-animation="21"><a href="#">Scale down / scale down</a></li>--}}
                {{--<li data-animation="22"><a href="#">Scale up / scale up</a></li>--}}
                {{--<li data-animation="12"><a href="#">Fade bottom / Fade top</a></li>--}}
            {{--</ul>--}}
        {{--</div><!-- /dl-menu-wrapper-->--}}
    {{--</div><!-- /triggers -->--}}

    <div id="pt-main" class="pt-perspective">
        {{-- pt-page-0 --}}
        @include('page-landing')

        {{-- pt-page-1 --}}
        @include('page-whoami')

        {{-- pt-page-2 --}}
        @include('page-whoami-developer')

        {{-- pt-page-3 --}}
        <div class="pt-page pt-page-3">
            <h1>me designer</h1>
        </div>

        <div class="pt-page pt-page-4"><h1><span>A collection of</span><strong>Page</strong> Transitions</h1></div>
        <div class="pt-page pt-page-5"><h1><span>A collection of</span><strong>Page</strong> Transitions</h1></div>
    </div>

    <script src="js/jquery.dlmenu.js"></script>
    <script src="js/pagetransitions.js"></script>
    </body>

</html>
