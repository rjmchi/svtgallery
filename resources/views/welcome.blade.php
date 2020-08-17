<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SVT Gallery</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>
    <body>
        <div id="app">
            <header-component></header-component>
            <home-component></home-component>
            <gallery-component></gallery-component>
            <contact-component></contact-component>
            <shows-component></shows-component>
            <footer-component></footer-component>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
</html>
