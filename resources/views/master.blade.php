<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>neil rowe</h1>

    @yield('contain')

    @foreach($messages as $mess)
   ID: {{$mess->id}}<br>
   Title: {{$mess->title}}<br>
   Content: {{$mess->content}}<br>
   <hr>
    @endforeach
 

    </body>
</html>