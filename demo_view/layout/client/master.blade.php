<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.client.head')
</head>
<body>
    @include('layout.client.header')
    @yield('main-content')
    @include('layout.client.footer')
</body>
</html>
