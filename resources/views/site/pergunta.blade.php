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
                                    <div class="h5 m-0">{{ $item->user }}</div>
                                    <div class="h7 text-muted">{{ $item->name }}</div>
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
                        <a href="#" class="card-link"><i class="fa fa-arrow-up"></i> Up</a>
                        <a href="#" class="card-link"><i class="fa fa-arrow-down"></i> Down</a>
                    </div>
                </div>
                @endforeach
                <!-- Form /////-->
                <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <form id="ajax_form" action="javascript:void(0)" method="post">
                            {{ csrf_field() }}
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Tire sua Duvida</h4>
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>                
                                    </div>
                                    <div class="modal-body">
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                                    <div class="form-group">
                                                        <input class="form-control" id="titulo" name="titulo" placeholder="Titulo" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="pergunta" name="pergunta" rows="3" required placeholder="Qual a sua duvida?"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-toolbar justify-content-between">
                                                
                                                <!-- <div class="btn-group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fa fa-globe"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
                                                    </div>
                                                </div> -->
                                            </div>
                                      
                                    </div>
                                    <div class="modal-footer">
                                    <div class="btn-group">
                                                    <button type="submit" class="btn btn-primary">share</button>
                                                </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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