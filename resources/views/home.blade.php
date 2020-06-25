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
    
    <div id="page-content-wrapper">
        <div id="containerPrincipal" class="container-fluid">
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
    </div>
 
@endsection