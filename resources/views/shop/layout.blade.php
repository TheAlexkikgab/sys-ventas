<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/da1f68a07d.js" crossorigin="anonymous"></script>

    <title>Sys-ventas</title>
    @livewireStyles
    <style>

        :root{
            --primary-color: #98445b;
            --darker-shade: #6b283a;
            --black-color: #f5f7f6;
            --gray-color: #8fa493;
        }
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            overflow-x: hidden;
        }

        html{
            font-size:62.5%
            .roboto-mono-<uniquifier> {
            font-family: "Roboto Mono", monospace;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            }
        }

        body{
            background-color: #281c32;
        }

        a{
            text-decoration:none;
            text-transform:capitalize;
        }

        .header{
            width:100vw;
        }

        .header .nav-actions{
            width:100%;
            display: flex;
            justify-content: space-between;
            align-items:center;
            padding: 2rem 5rem;
        }

        .header .nav-actions .logo{
            font-size:3rem;
            color:var(--black-color)
        }

        .header .nav-actions .user-actions{
            display:flex
        }

        .header .nav-actions .user-actions *{
            font-size:1.4rem;
        }

        .header .nav-menu{
            display:flex;
            justify-content:center;
            align-items:center;
            padding:2rem 5rem;
            background-color:var(--primary-color);
        }

        .header .nav-menu a{
            font-size: 2rem;
            padding-left:2rem;
            color:var(--black-color);
            padding: 10px 30px;
            border: 1px solid #ccc;
            border-radius: 15px;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            color: white;
            cursor: pointer;
            transition: 0.3s;
            margin-left:3rem;
        }

            .header .nav-menu a:hover{
                background-color: #6b283a;
            }

        .main{
            padding:0 5rem;

        }

            .boton {
            padding: 10px 30px;
            border: 1px solid #ccc;
            border-radius: 15px;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            color: white;
            cursor: pointer;
            transition: 0.3s;
            background-color: #281c32;
        }
        .boton .i{
            color: white;
        }

        .boton:hover {
            background-color: #6b283a;
        }
        
        .boton:active {
            background-color: #6b283a;
        }
  
    </style>
</head>
<body>
    <header class="header">
        <div class="nav-actions">
            <a href="/shop" class="logo">Sys-ventas</a>
            <div class="search-form"><form action="">
            {{-- <input type="search" name="search" placeholder="search...">    --}}
            </form></div>
            <div class="user-actions">
                @guest
                    <a href="/login" class="boton"><i class="fa-solid fa-user"></i> Cuenta</a>
                @endguest
                @auth
                <a class="dropdown-item boton" href="http://localhost:8000/logout" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
                <form id="logout-form" action="http://localhost:8000/logout" method="POST" class="d-none">
                    <input type="hidden" name="_token" value="zMSAR8msM2nuPHmXTogBfitDXvH4UbRX7dk2xZdv" autocomplete="off">
                </form>
                @endauth
                <div class="boton"><i class="fa-solid fa-basket-shopping"></i> Carrito (Proximamente)</div>
            </div>
        </div>
        <div class="nav-menu ">
            @foreach ($categories as $category)
            <a wire:navigate href="{{ route('shop.category-products', ['category'=>$category]) }}">{{ $category->name }}</a>
            @endforeach
        </div>
        
    </header>
    <main class="main">
        {{$slot}}
    </main>
    <footer class="footer"></footer>
</body>
</html>