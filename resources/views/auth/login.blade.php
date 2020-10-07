<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="Equipe Educare++" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="images/favicon-educare.png" type="image"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body class="bg-default">
  <section class="main-content">
    <div class="header bg-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center">
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <div class="container mt--8 pb-2">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Caso não seja cadastrado,  <a href="/register">cadastre-se aqui</a></small>
              </div>
              <form method="POST" action="/login">
              @csrf
              @error('email')
                <div class="alert alert-danger alert-block"role="alert" id="alert">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ $errors->default->first('email') }}
                </div>
              @enderror
              @error('password')
                <div class="alert alert-danger alert-block"role="alert" id="alert">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ $errors->default->first('password') }}
                </div>
              @enderror
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="email" placeholder="E-mail" required type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password" placeholder="Senha" required type="password">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="py-5">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-12">
          <div class="copyright text-center text-xl-center text-muted">
            © 2020 <a href="/" class="font-weight-bold ml-1">Educare++</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
