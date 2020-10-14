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

