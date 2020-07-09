@extends('layouts.layout')
@section('header')
    <title>Forúm | Educare++</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <link rel="stylesheet" href="/css/forum.css">
@endsection
@section('content')
        
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
                    <div class="h5 m-0 theme-color">@_FulanodTal</div>
                    <div class="h7 text-muted">Fulano de tal</div>
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
        <div class="text-muted h7 mb-2 text-white"><i class="fas fa-user-clock"></i> </i>10 min atras</div>
        <a class="card-link" href="#">
            <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
        </a>

        <p class="card-text text-white">
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
    
@endsection