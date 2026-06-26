<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Kind')</title>
    @yield('head')
</head>
<body {!! $bodyAttributes ?? '' !!}>
    @yield('content')
</body>
</html>
