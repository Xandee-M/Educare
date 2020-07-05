@extends('layouts.layout')
@section('header')
    <title>Home | Educare++</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <link rel="stylesheet" href="/css/home.css">
@endsection
@section('content')                                                                               
	

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="images/home/banner.png" >
        <div class="container">
			
          <div class="carousel-caption-h text-left">
		  <div class="col-md-6">
            <h1>Entre já para a Educare++</h1>
            <p>Uma comunidade para pessoas que se interessam por Tecnologia.</p>
			<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
			</div>
		</div>
        </div>
      </div>
    </div>
  </div>
      
        <div id="containerCard" class="container">
	        <h1>Sobre a Plataforma:</h1>
	        <div class="card-deck">
	            <div class="card shadow mb-5">
	                <div class="img-card">
	                    <img src="../images/team.png" href="#" class="rounded-circle center" alt="produto">
	                </div>
	                <div class="card-body">
	                    <h5 class="card-title">A Comunidade</h5>
	                    <p class="card-text">A Educare++ é uma comunidade para pessoas que se interessam por Tecnologia.</p>
	                </div>
	            </div>
	            <div class="card shadow mb-5">
	                <div class="img-card">
	                    <img src="../images/curso.png" href="/cursos" class="rounded-circle center" alt="Cursos-Online">
	                </div>
	                <div class="card-body">
	                    <h5 class="card-title">Cursos Online</h5>
	                    <p class="card-text">Faça cursos online disponibilizado por pessoas que utilizam a comunidade.</p>
	                </div>
	            </div>
	            <div class="card shadow mb-5">
	                <div class="img-card">
	                    <img src="../images/forum.png" href="/forum" class="rounded-circle center"  alt="Forum">
	                </div>
	                <div class="card-body">
	                    <h5 class="card-title">Forum</h5>
	                    <p class="card-text">Disponibilizamos um forum exclusivo para que a comunidade consiga se comunicar e se ajudar.</p>
	                </div>
	            </div>
	        </div>
        </div>
        <div class="container-fluid" id="containerCursos">
	        <div class="container" >
	        	<br><br><h1>Cursos em Destaque:</h1><br>
		      <div class="card-deck">
		        <div class="card">
		          <div class="item">
		            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1200px-HTML5_logo_and_wordmark.svg.png" alt="Curso HTML5">
		          </div>
		          <div class="border-effect bg-warning"></div>
		          <div class="card-body">
		            <h4 class="card-title">HTML5</h4>
		            <p class="card-text"><span class="green">Gratuito</span></p>
		            <button class="btn btn-outline-info" type="button" >Acessar Curso</button>
		          </div>
		        </div>
		        <div class="card">
		          <div class="item">
		            <img class="card-img-top" src="https://i0.wp.com/www.tutorialwebdesign.com.br/wp-content/uploads/2015/07/css3.jpg?fit=250%2C237&ssl=1" alt="Curso HTML5">
		          </div>
		          <div class="border-effect bg-warning"></div>
		          <div class="card-body">
		            <h4 class="card-title">CSS3</h4>
		            <p class="card-text"><span class="green">Gratuito</span></p>
		            <button class="btn btn-outline-info" type="button" >Acessar Curso</button>
		          </div>
		        </div>
		        <div class="card">
		          <div class="item">
		            <img class="card-img-top" src="https://sujeitoprogramador.com/wp-content/uploads/2019/08/jsjsjs.png" alt="Curso HTML5">
		          </div>
		          <div class="border-effect bg-warning"></div>
		          <div class="card-body">
		            <h4 class="card-title">JAVASCRIPT</h4>
		            <p class="card-text"><span class="green">Gratuito</span></p>
		            <button class="btn btn-outline-info" type="button" >Acessar Curso</button>
		          </div>
		        </div>
		        <div class="card">
		          <div class="item">
		            <img class="card-img-top" src="https://jonathasguerra.com.br/blog/wp-content/uploads/2015/06/php7.jpeg" alt="Curso HTML5">
		          </div>
		          <div class="border-effect bg-warning"></div>
		          <div class="card-body">
		            <h4 class="card-title">PHP7</h4>
		            <p class="card-text"><span class="green">Gratuito</span></p>
		            <button class="btn btn-outline-info" type="button" >Acessar Curso</button>
		          </div>
		        </div><br>
		      </div>
		    <div id="buttonCursos">
		       	<button class="btn btn-success" type="button" >Ver todos os Cursos</button>
		    </div>
		
  
 
@endsection