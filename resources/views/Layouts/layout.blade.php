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


						

<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
	<div class="container-fluid">
		<a class="h4 mb-0 text-uppercase d-none d-lg-inline-block" href="/" >Logo</a>
		<!-- Form -->
		<form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
			<div class="form-group mb-0">
				 <div class="input-group input-group-alternative">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-search"></i></span>
					</div>
					<input class="form-control" placeholder="Pesquisar" type="text">
				</div>
			</div>
		</form>
		<!-- User -->
		
		
		<ul class="navbar-nav align-items-center d-none d-md-flex">
		<li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
			<li class="nav-item dropdown">
				<a id="click_advance" class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<div class="media align-items-center">
						<span class="avatar avatar-sm rounded-circle">
							<img alt="Image placeholder" src="https://picsum.photos/140/140">
						</span>
						<div class="media-body ml-2 d-none d-lg-block">
							<span class="mb-0 text-sm navname font-weight-bold">{{ Auth::user()->user }} <i class="fas fa-sort-down"></i></span>
						</div>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">	
				@guest
				@else				
					<a href="/perfil/{{ Auth::user()->slug }}" class="dropdown-item">
						<span>Meu perfil</span>
					</a>
					<a href="#" class="dropdown-item">
						<span>Configurações</span>
					</a>			
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       Sair
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
					</form>
				@endguest
				</div>
			</li>		
		</ul>
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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/js/custom.js"></script>
</body>
</html>

