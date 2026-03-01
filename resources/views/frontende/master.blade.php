<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Website-Muhammaadullah</title>
        
       @include('frontende.includes.style')
    </head>
    <body>
        <!-- Navigation-->
      @include('frontende.includes.navbar')
     
      @yield('content')

      @include('frontende.includes.footer')

     @include('frontende.includes.script')
    </body>
</html>
