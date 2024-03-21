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
    <style>
        :root{
            --primary-color: rgb(0, 255, 204);
            --darker-shade: rgb(4, 157, 126);
            --black-color: rgb(1, 32, 26);
            --gray-color: rgb(160, 170, 168);
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
            background-color: #fff;
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
            margin-left:1.5rem;
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
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="nav-actions">
            <a href="" class="logo">Sys-ventas</a>
            <div class="search-form"><form action="">
             <input type="search" name="search" placeholder="search...">   
            </form></div>
            <div class="user-actions">
                @guest
                    <a href=""><i class="fa-solid fa-user"></i> account</a>
                @endguest
                @auth
                    user-name
                @endauth
                <div class="basket"> <i class="fa-solid fa-basket-shopping"></i> basket</div>
            </div>
        </div>
        <div class="nav-menu">
            @foreach ($categories as $category)
            <a href="">{{$category->name}}</a>
            @endforeach
        </div>
    </header>
    <main class="main">
        <h1>Pagina principal de la web</h1>
        {{$slot}}
    </main>
    <footer class="footer"></footer>
</body>
</html>

