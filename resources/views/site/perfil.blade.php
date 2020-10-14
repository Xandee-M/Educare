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
  <div class="row">
      <div class="col-lg-12 full-banner">
        <div class="banner" style="background-image: url(https://picsum.photos/1920/200);"></div>
        
      </div>
  </div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-12 col-sm-12 h-80">
      <div class="box-perfil-p">
        <img src="https://picsum.photos/140/140" class="img-fluid perfil-p" alt="Fulando de tal progile">
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="profile-info ">
            <h2 class="theme-color mb-0">
                <a href="/perfil/{{ $user->id }}/{{ $user->slug }}">
                    {{ $user->user }}
                </a>
                
				
            </h2>
          <p class="theme-color">{{ $user->name }}</p>
          <p class="">Aqui você pode deixar suas dúvidas, compartilhar conteúdo e encontrar soluções.</p>

      </div>
      
    </div>
    <div class="col-lg-1">
      <!--<div class="box-medalha">
        <img src="/images/perfil.jpg" class="img-fluid medalha" alt="Fulando de tal progile">
      </div>-->
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    
  <div class="col-md-8">

<!--- \\\\\\\Post-->

<div class="card gedf-card">
    
    <div class="card-body">

   
        <form id="pub_form" action="javascript:void(0)" method="post">
            {{ csrf_field() }}
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                    <div class="form-group">
                        <input class="form-control" id="titulo" name="titulo" placeholder="Titulo" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="pergunta" name="pergunta" rows="3" required placeholder="Qual a sua duvida?"></textarea>
                    </div>
                    <button type="submit" onClick="window.location.reload();"s class="btn btn-primary">Enviar</button>

                </div>
            </div>
        
        </form>
    </div>
</div>


<div id="post-data">
    @include('site.userDuvidas')

    </div>
<!-- Post /////-->





</div>

</div>
</div>
  </div>
</div>
@endsection