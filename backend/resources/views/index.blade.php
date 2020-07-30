<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Laravel</title>
        <base href="/">
    </head>
    <body>
        <app-root></app-root>
        <script src="{{asset('/runtime.js')}}" defer></script>
        <script src="{{asset('/polyfills.js')}}" defer></script>
        <script src="{{asset('/styles.js')}}" defer></script>
        <script src="{{asset('/vendor.js')}}" defer></script>
        <script src="{{asset('/main.js')}}" defer></script>
    </body>
</html>
