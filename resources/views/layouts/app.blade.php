<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') Laravel 001</title>
    <link rel="shortcut icon" href="{{ url('images/favicon.ico') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        @yield('content')
    </div>
</body>

</html>
