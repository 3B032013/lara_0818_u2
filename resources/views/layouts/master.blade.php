<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title') | MyBlog</title>
    </head>
    <body>
        @include('layouts.partials.navigation')
        <div class="container">
            @yield('content')
        </div>    
    </body>
</html>
