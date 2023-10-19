<!DOCTYPE html>

<html>
  <head>
    @include('user.partials.header')

  </head>

  <body>

          @include('user.partials.nav')


                @yield('content')


    @include('user.partials.scripts')
  </body>
</html>
