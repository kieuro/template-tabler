<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield("title") - Hello World</title>
    <!-- CSS files -->
    <link href="{{ asset("dist/css/tabler.min.css") }}" rel="stylesheet" />
    <link href="dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet" />
    <link href="{{ asset("dist/css/demo.min.css") }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    @stack("styles")
</head>

<body class=" d-flex flex-column">
    <div class="page page-center">
        @yield("content")
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    @stack("scripts")
    <script src="{{ asset("dist/js/tabler.min.js") }}" defer></script>
    <script src="{{ asset("dist/js/demo.min.js") }}" defer></script>
    <script src="{{ asset("dist/js/demo-theme.min.js") }}"></script>
</body>

</html>
