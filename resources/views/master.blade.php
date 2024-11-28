<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soy el maestro</title>
</head>
<body>

    <header>
        Header 2
    </header>

    @yield('content')
    <h1> esto es para todos los contactos</h1>

    <section>

        <h2> codigo adicional para todos los contactos</h2>
        @yield('more content')

    </section>
</body>
</html>
