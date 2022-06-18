<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App title -->
    <title>SilMix</title>
    <!-- Link CSS file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Fotorama from CDNJS, 19 KB -->
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
<!-- Navigation bar -->
<div class="wrapper">
    <header class="header">
        <!-- Logo -->
        <a href="#" class="logo">SilMix</a>
        <!-- Hamburger icon -->
        <input class="side-menu" type="checkbox" id="side-menu"/>
        <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
        <!-- Menu -->
        <nav class="nav">
            <ul class="menu">
                <li><a href="{{route('category')}}">Продукция</a></li>
                <li><a href="{{route('info')}}">Полезная информация</a>
                </li>
                <li><a href="{{route('document')}}">Сертификаты</a></li>
                <li><a href="{{route('work')}}">Наши работы</a></li>
                <li><a href="{{route('contact')}}">Контакты</a></li>
            </ul>
        </nav>
    </header>
    <!-- Main content -->
    <main class="content  w-100">
        <article class="grid-content">
            <div class="block-1">@include('includes.sidebar')</div>
            <div class="block-2">
                @yield('content')
            </div>
        </article>
    </main>
    <footer class="footer">
        <div class="d-flex justify-content-around flex-wrap work-header">
            <div><h4 class="m-3">Контакты</h4></div>
            <div class="d-flex flex-column">
                <span class="m-3">+38(063) 000-0-00</span>

                <span class="m-3">+38(067) 000-00-00</span>

                <span class="m-3">+38(050) 000-00-00</span>

                <span class="m-3">+38(063) 808-00-00</span>

                <span class="m-3">+38(067) 149-00-00</span>

                <span class="m-3">zp.ukr.net</span>

                <span class="m-3">г. Запорожье</span></div>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
