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
    <link rel="stylesheet" href="/css/layout.css">
</head>
<body>

<div class="container-fluid">

    <nav class="">
            <div class="row">
                <div class="col-lg-2">
                    <a class="navbar-brand" href="#">
                        <img class="img-fluid" src="../images/logo-educare.png" alt="logo-educare">
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <div class="input-group mb-2">
                            
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div class="input-group-append">
                                <button class="btn btn-outline-info" type="button">Pesquisar</button>
                            </div>
                        </div>  
                    </div>              
                </div>
                <div class="col-lg-2">
                    <div class="box-perfil">
                        <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><img class="perfil" src="../images/perfil.jpg" alt="logo-educare"></a>         
                                <div id="wrapper" class="toggled">
                                    <div id="sidebar-wrapper">
                                        <ul class="sidebar-nav" id="homeMenu">
                                            <li class="sidebar-brand"> <a href="#"> Home</a> </li>
                                            <li> <a href="#">Cursos</a> </li>
                                            <li> <a href="#">Forum</a> </li>
                                            <li> <a href="#">Quem Somos</a> </li>
                                        </ul>
                                        <div class="buttonEntrar">
                                            <button type="button" class="btn btn-outline-info">Entrar</button>
                                            <span class="barraVertical">|</span>
                                            <button type="button" class="btn btn-outline-success">Cadastre-se</button>
                                        </div>
                                    </div> <!-- /#sidebar-wrapper -->
                                </div> <!-- /#wrapper -->
                                
                              
  
                    </div>
                </div>
            </div> 
            </nav>

        </div>

    @yield('content')
    
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>

    <script src="/js/custom.js"></script>
</body>
</html>

