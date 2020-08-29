@extends('layouts.layoutLogin')
@section('header')



<title>Login | Educare++</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta property="og:title" content="">
<meta property="og:description" content="">
<link rel="stylesheet" href="/css/login.css">
@endsection
@section('content')


<section class="fundo-login pt-50">

  <div class="container-fluid  login-area">
    <div class="row">
      <div class="col-lg-7">
        <div class="visual-padding">
          <div class="text-box">
          </div>
        </div>
      </div>
      <div class="col-lg-5">
      <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Cadastro</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Nome de usuário</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Senha</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Login">
				</div>
				<div class="hr"></div>
			</div>
			<div class="for-pwd-htm">
				<div class="group">
					<label for="nome" class="label">Nome</label>
					<input id="nome" type="text" class="input">
				</div>
        <div class="group">
					<label for="user" class="label">Usuario</label>
					<input id="user" type="text" class="input">
				</div>
        <div class="group">
					<label for="email" class="label">E-mail</label>
					<input id="email" type="text" class="input">
				</div>
        <div class="group">
					<label for="pass" class="label">Senha</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
        <div class="group">
					<label for="pass" class="label">Confirmar senha</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Reset Password">
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
</div>
      </div>
    </div>
  </div>

  @endsection