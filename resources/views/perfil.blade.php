@extends('layouts.layout')
@section('header')
    <title>Perfil | Educare++</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <link rel="stylesheet" href="/css/perfil.css">
@endsection
@section('content')
<div class="container-fluid">
  <div class="row pt-5">
    <div class="col-12 profile-area p-4">
      <div class="container-profile">
        <div class="avatar-area">
          ​<picture>
            <img src="/images/perfil.jpg" class="img-fluid img-thumbnail" alt="Fulando de tal progile">
          </picture>
        </div>
        <div class="profile-info">
          <strong>Fulano de tal</strong>
          <a href=>Fulanodetal@2020.com.br</a>
        </div>

      </div>
      <div class="row">
        <div class="col-12">
          <div class="profile-description">
            <p>Aqui você pode deixar suas dúvidas, compartilhar conteúdo e encontrar soluções.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection