<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/da1f68a07d.js" crossorigin="anonymous"></script>
    <title>sys-ventas</title>
    @vite(['resources/scss/admin/layout.scss'])
</head>
<body>
    <section class="horizontal-nav">
        <div class="left-nav">
            <h2>Panel de Administración de Sys-ventas</h2>
            <h3 class="admin">ADMIN</h3>
        </div>
        <div class="right-nav">
            <p>loggedAdmin</p>
            <p><i class="fa-solid fa-right-from-bracket"></i></p>
        </div>
    </section>
    <section class="vertical-nav">
        <a href="">Administrar Categorías</a>
        <a href="">Administrar Productos</a>
        <a href="">Administrar Banners</a>
        <a href="">Administrar Órdenes</a>
        <a href="">Administrar Clientes</a>

    </section>
    <section class="content">
        {{-- <h1>Acá va el contenido</h1> --}}
        @yield('content','Bienvenido al Panel de Administración')
    </section>
</body>
</html>