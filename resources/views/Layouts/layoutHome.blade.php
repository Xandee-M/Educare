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
<body>


      
        
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
      
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/bootstrap/popper.min.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
</body>
</html>

