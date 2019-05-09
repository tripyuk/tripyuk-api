<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body>
@include('layouts.navbar')

@yield('search_form')

@yield('content')

@include('layouts.footer')

</body>
</html>
