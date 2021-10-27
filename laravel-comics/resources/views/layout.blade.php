<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">

        <title>Laravel</title>
      
    </head>
    <body>
        
       @include('partial.header')
        <main>
            @yield('content')
        </main>
    </body>
</html>