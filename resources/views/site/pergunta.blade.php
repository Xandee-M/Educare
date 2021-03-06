@extends('layouts.layout')
@section('header')
    <title>Forúm | Educare++</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <link rel="stylesheet" href="/css/forum.css">
    <style type="text/css">
  		.ajax-load{

		    padding: 10px 0px;
		    width: 100%;
  		}
  	</style>
@endsection
@section('content')

<div class="container-fluid gedf-wrapper mt-30">
        <div class="row">

            <div class="col-md-8 offset-md-2 gedf-main">

                <!--- \\\\\\\Form-->
                @foreach ($pergunta as $item)
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">{{ $item->escritor->user}}</div>
                                    <div class="h7 text-muted">{{ $item->escritor->name }}</div>
                                </div>
                            </div>
                           
                        </div>
                       
                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock"></i> {{ $item->data }}</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title">{{ $item->titulo }}</h5>
                        </a>

                        <p class="card-text">
                        {{ $item->pergunta }}
                        </p>
                    </div>
                    <div class="card-footer">
                    <form id="ajax_form" action="javascript:void(0)" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="perguntaid" value="{{ $item->id }}">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Responder..." name="resposta" aria-label="Resposta..." aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" onClick="window.location.reload();" type="submit">Enviar</button>

                                </div>
                            </div>
                    </form>
                    </div>
                   
                </div>
                @endforeach
                <!-- Form /////-->

                <div id="post-data">
                @include('site.respostas')

                </div>

                </div>
            
        </div>
    </div>


</div>

</div>
</div>



@endsection
@section('footer')
<script
	src="https://code.jquery.com/jquery-3.5.1.min.js"
	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	crossorigin="anonymous"></script>
<script src="/js/resp.js"></script>
@endsection
