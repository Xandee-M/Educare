<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="Equipe Educare++" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('header')
    <link rel="icon" href="images/favicon-educare.png" type="image"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/layout.css">
 
</head>
<body id="pagina">


						





<nav class="navbar navbar-expand bg-primary position-relative shadow-sm">
	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item">
				<a class="nav-link text-white" href="/"><img src="images/logo-educare.png" alt=""></a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
			<li class="nav-item">
				<a class="nav-link search-button text-white" href="#"><i class="fa fa-search"></i>Pesquisar</a>
			</li>
			<li class="nav-item">
            <div class="ml-2">
            @guest
            @else
                                    <div class="h5 m-0">{{ Auth::user()->name }}</div>
                                    <div class="h7 text-muted">Miracles Lee Cross</div>
                                </div>
                                
            </li> 
            <li class="nav-item">
            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuration</div>
                                        <a class="dropdown-item" href="/perfil">Ver Pefil</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </div>
                                </div>
                                @endguest
                            </div>
                                
			</li>   
		</ul>
	</div>
	
	<div class="search-bar d-flex bg-white position-absolute w-100 h-100" style="overflow: hidden; max-width:0px; transition: all 0.2s ease-in-out; opacity: 0;">
		<a href="#" class="search-back text-dark d-flex align-items-center text-decoration-none">
			<i class="fa fa-arrow-back px-3">arrow_back</i>
		</a>
		<input type="text" class="form-control border-0 rounded-0 w-100 h-100" placeholder="Pesquisar..." />
	</div>
</nav>      
        

    @yield('content')

    <footer class="footer-area">
			<div class="container">
				<div class="row">				
					<div class="col-md-4 col-sm-6">
						<div class="bloco-ftr">
							<h4 class="title-ftr">Informações</h4>
							<ul>
								<li><a href="#">A Educare++</a></li>
								<li><a href="#">Fórum</a></li>
								<li><a href="#">Politica de Privacidade</a></li>
								<li><a href="#">Termos e condições</a></li>
								<li><a href="#">Entre em contato</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="bloco-ftr">
							<h4 class="title-ftr">Links Úteis</h4>
							<ul>
								<li><a href="#">Fórum</a></li>
								<li><a href="#">Cursos</a></li>
								<li><a href="#">Perfil</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Central do Professor</a></li>
							</ul>
						</div>
					</div>	
					<div class="col-md-4 col-sm-6">
						<div class="bloco-ftr">
							<h4 class="title-ftr">Newsletter</h4>
							<div class="newsletter-form">
								<p>Receba dicas e novidades em seu e-mail sobre o Educare++</p>
								<form method="POST" class="form-inline">				
									<input name="EMAIL" id="email" placeholder="Seu e-mail" class="form-control" type="email">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ftr-btm-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="copyright-text text-center">© 2020 Todos os direitos reservados</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
        <div class="modal animate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body text-center p-lg">
                    <form>
<p>Escolha uma cor para o fundo da página</p>
<input id="seletor_de_cores" type="color"/><br><br>
<button type="button" onclick="mudar_cor_de_fundo()">Executar</button>
</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/bootstrap/popper.min.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>
    <script defer src="/fontawesome/js/all.js"></script>

    <script src="/js/custom.js"></script>
</body>
</html>

