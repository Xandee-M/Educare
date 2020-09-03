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
  <div class="row">
    <div class="col-lg-2 col-sm-12">
      <div class="box-perfil-p">
        <img src="https://picsum.photos/140/140" class="img-fluid perfil-p" alt="Fulando de tal progile">
      </div>
    </div>
    <div class="col-lg-9 col-md-12 col-sm-12">
      <div class="profile-info ">
            <h2 class="theme-color mb-0">
                <a href="/perfil/{{ $user->slug }}">
                    {{ $user->user }}
                </a>
                <a type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-edit"></i></a>
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-center">
                        <div class="modal-dialog .modal-align-center">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>                
                                </div>
                                <div class="modal-body">	@guest
				@else				
					<a href="/perfil/{{ Auth::user()->slug }}" class="dropdown-item">
						<span>Meu perfil</span>
					</a>
					<a href="#" class="dropdown-item">
						<span>Configurações</span>
					</a>			
					
				@endguest</div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
<div class="card gedf-card box-card">
   
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                <div class="form-group">
                    <label class="sr-only" for="message">post</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Qual a sua duvida?"></textarea>
                </div>

            </div>
           
        </div>
        <div class="btn-toolbar justify-content-between">
            <div class="btn-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
           
        </div>
    </div>
</div>
<!-- Post /////-->

<!--- \\\\\\\Post-->
@for ($i = 0; $i < 10; $i++)
<div class="card gedf-card box-card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mr-2">
                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                </div>
                <div class="ml-2">
                    <div class="h5 m-0 theme-color">{{ $user->user }}</div>
                    <div class="h7 text-muted">{{ $user->name }}</div>
                </div>
            </div>
            <div>
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-h"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                        <a class="dropdown-item" href="#">Denunciar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card-body">
        <div class="text-muted h7 mb-2 "><i class="fas fa-user-clock"></i> </i>10 min atras</div>
        <a class="card-link" href="#">
            <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
        </a>

        <p class="card-text ">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
            sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
        </p>
    </div>
    <div class="card-footer">
        <a href="#" class="card-link"><i class="far fa-bell"></i> Seguir</a>
        <a href="#" class="card-link"><i class="fa fa-comment"></i> Responder</a>
    </div>
</div>
@endfor

<!-- Post /////-->





</div>

</div>
</div>
  </div>
</div>
@endsection