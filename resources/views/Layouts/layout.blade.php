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
		<a class="h4 mb-0 text-uppercase d-none d-lg-inline-block" href="/forum" >Logo</a>
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



	@yield('footer')     
	<script
	src="https://code.jquery.com/jquery-3.5.1.min.js"
	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	crossorigin="anonymous"></script>
    <script src="/bootstrap/popper.min.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>
    <script defer src="/fontawesome/js/all.js"></script>
    <script src="/js/custom.js"></script>

</body>
</html>

