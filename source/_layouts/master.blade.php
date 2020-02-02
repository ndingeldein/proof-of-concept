<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        @include('_partials.header')
        @yield('body')
        {{-- <script type="text/javascript" src="{{ mix('js/main.js', 'assets/build') }}" defer></script> --}}
    </body>
</html>
