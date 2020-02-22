<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token()  }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/css/app.css')}}">

    </head>
    <body>
       <div id="app">
           <example-component></example-component>
       </div>
    </body>
    <script>
        var BASE_URL = '{{ URL::to('/') }}'
    </script>
    <script src="{{asset('/js/app.js')}}"></script>
</html>
