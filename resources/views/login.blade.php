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

    <section class="fundo-login">
        <nav class="nav">
            <a class="nav-login" href="#"><img src="/images/logo-educare.png" alt=""></a>
        </nav>
        <div class="container-fluid margin-login">
            <div class="row">
                <div class="col-lg-7">
                    <div class="visual-padding">
                        <div class="text-box">
                        </div>     
                    </div>                 
                </div>
                <div class="col-lg-5">
                    <div class="visual-padding">
                        <h1 class="theme-color title mb-20">Login</h1>
                        <form class="form-signin">
                            <div class="form-label-group">
                                <input type="text" id="inputEmail" class="form-control" placeholder="Nome de usuário" required>
                                <label for="inputEmail"></label>
                            </div>
                            <div class="form-label-group mt-10">
                                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
                                <label for="inputPassword"></label>
                            </div>
                            <div class="checkbox mb-3">
                                <input type="checkbox" value="remember-me"> Lembrar senha                        
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection