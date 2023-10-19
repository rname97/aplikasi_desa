<!doctype html>
<html lang="en">
<head>

    @include('user.partials.header')
</head>
<body>
    {{-- <div class="container"> --}}
        @include('user.partials.nav')
        @yield('content')
        @include('user.partials.scripts')

</body>
</html>
