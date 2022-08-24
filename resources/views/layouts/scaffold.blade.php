<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/7022da3971.js" crossorigin="anonymous"></script>
</head>

<body class="bg-purple-500">
@include('components.navbar')
@yield('content')
</body>
</html>
