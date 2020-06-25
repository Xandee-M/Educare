<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="Equipe Educare++" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('header')
    <link rel="icon" href="images/favicon-educare.png" type="image"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<header class="transparente">
    <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="../images/logo-educare.png" alt="logo-educare">
            </a>
            <div class="search">
                <form class="form-inline my-2 my-lg-0 ">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        <div class="collapse navbar-collapse" >
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="itensmenu">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Forum</a>
                </li>
                <li class="nav-item">
                    <a href="/quemsomos/" class="nav-link text-light">Quem Somos</a>
                </li>
            </ul>
            <div class="buttonLogin">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="itensmenu">
                  <li class="nav-item">
                    <a href="/login" class="nav-link text-light">Entrar | </a>
                  </li>
                  <li class="nav-item">
                    <a href="/login" class="btn btn-outline-primary ml-1">Cadastre-se</a>
                  </li>
                </ul>    
            </div>
        </div>
    </nav>
</header>
    @yield('content')
    
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/custom.js"></script>
</body>
</html>