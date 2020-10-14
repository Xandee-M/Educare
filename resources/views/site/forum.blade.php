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
        
<div class="container-fluid gedf-wrapper">
        <div class="row">
            {{-- <div class="col-md-2 p-0" >
            <div class="grudado">

            <div id="jquery-accordion-menu" style="border-right: 1px solid #000;padding-top: 30px;" class="jquery-accordion-menu">
				<ul>
                    @foreach ($user as $item)
                        
                   
                <li><a href="/perfil/{{ $item->id }}/{{ Auth::user()->slug }}">
                    @endforeach
					<div class="media align-items-center">
						<span class="avatar avatar-sm rounded-circle">
							<img alt="Image placeholder" src="https://picsum.photos/140/140">
						</span>
						<div class="media-body ml-2 d-none d-lg-block">
						
							{{ Auth::user()->user }}
						
						</div>
					</div>
				
                    </a>
			</li>
                    @guest
		    		@else
					<li class="active"><a href="/forum"><i class="fa fa-home"></i>Home </a></li>
					<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-envelope"></i>Sair </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
					</form>
                    @endguest
                    </li>
				</ul>
			</div>
            </div>
            </div> --}}
            <div class="col-md-8 offset-md-2 gedf-main" style="margin-top: 30px">

                <!--- \\\\\\\Form-->
                <div class="card gedf-card">
                    
                    <div class="card-body">
                    <a type="" data-toggle="modal" data-target="#myModal">
                        <form>
            
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="" rows="3" placeholder="Qual a sua duvida?" disabled></textarea>
                                </div>
                            </form>
                    </a>
                    </div>
                </div>
                <!-- Form /////-->
                <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <form id="pub_form" action="javascript:void(0)"  method="POST">
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
                                    </div>
                                    <div class="modal-footer">
                                        <div class="btn-group">
                                            <button type="submit" onClick="window.location.reload();"  class="btn btn-primary">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
                <!--- \\\\\\\Post-->
               <div class="" id="post-data">
               
                    @include('site.posts')
               </div>
                
                

            </div>
           
    </div>


</div>

</div>
</div>

@endsection
@section('footer')

@endsection