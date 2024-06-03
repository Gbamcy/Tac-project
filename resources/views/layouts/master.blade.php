<!doctype html>
<html lang="en">
<head>

  <title>@yield('TAC')</title>
    @include('partials._meta')
    @include('partials._css')

</head>
<body>
    @include('partials._navigation')
    @yield('content')
    @include('partials._footer')
    @include('partials._js')


</body>
</html>
