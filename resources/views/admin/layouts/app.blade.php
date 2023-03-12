<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Curso Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://kit.fontawesome.com/9c0c03c6b4.js" crossorigin="anonymous"></script>
</head>
<body>
    @yield('content')
    @stack('scripts')
</body>
</html>