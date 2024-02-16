<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
</head>

<body>
    <h1>Hello, world!</h1>
    <div class="container-fluid">
        <!-- As a link -->
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
            </div>
        </nav>

        <!-- As a heading -->
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Navbar</span>
            </div>
        </nav>
    </div>

    @yield('contenidoPrincipal')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>