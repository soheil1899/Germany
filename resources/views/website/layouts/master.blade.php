<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>HANSE AUTOSELBSTHiLFE</title>


    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
<div id="app">
    <header>
        @include('website.layouts.header')
    </header>





    @yield('content')




    <footer>
        @include('website.layouts.footer')
    </footer>
</div>
</body>


<script src="/js/app.js"></script>
</html>
