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

<div class="container-fluid gedf-wrapper mt-10">
        <div class="row">

            <div class="col-md-6 offset-md-1 gedf-main">

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
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="#" class="card-link"><i class="fa fa-arrow-up"></i> Up</a>
                                <a href="#" class="card-link"><i class="fa fa-arrow-down"></i> Down</a>
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
                                    <button class="btn btn-outline-secondary" type="submit">Enviar</button>

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
            <div class="col col-md-3 offset-md-2">
                <div class="grudado">
                    <div class="card gedf-card ">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

</div>
</div>



@endsection
@section('footer')

@endsection
