@extends('layout')
@section('header')
    <title>Educare++</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <link rel="stylesheet" href="/css/login.css">
@endsection
@section('content')

    <div class="imagem">
        <header class="">
                <nav class="nav">
                    <a class="nav-logo " href="#"><img src="/images/logo-educare.png" alt=""></a>
                </nav>
        </header>
 

        <div class="container-fluid margin-login">
            <div class="row">
                        <div class="col-lg-7">
                        <div class="visual-padding">
                            <div class="text-box">
                                <h1 class="text-white title">Faça parte.</h1>
                                <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, nesciunt aliquid. Totam aperiam impedit quas dolorem, id necessitatibus assumenda velit labore tenetur, voluptatibus alias numquam nobis deleniti qui quasi. Iusto!</p>
                            </div>     
</div>                 
                        </div>
                        <div class="col-lg-5 align-self-center">
                       

                            <div class="visual-padding">
                            <h1 class="theme-color title">Login.</h1>
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
                                            <label class="">
                                                <input type="checkbox" value="remember-me"> Lembrar senha
                                            </label>
                                        </div>
                                        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                                    </form>
                            </div>
                        </div>
            </div>
        </div>
    </div>

@endsection