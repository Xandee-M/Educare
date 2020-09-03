@extends('layouts.layoutHome')
@section('header')
    <title>Home | Educare++</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="">
    <meta property="og:description" content="">
	<link rel="stylesheet" href="/css/home.css">
	
@endsection
@section('content')                                                                               

	<section class="banner">
		<div class="overlay"></div>
			<div class="tophead" >
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-7 ">
							<h1 class="title-main " >Educare++</h1>
							<h3 class="subtitle-main " >Lorem ipsum dolor sit amet consectetur adipiscing elit proin leo leo ornare nec vulputate tempus velit nam id purus tellus hendrerit mi dapibus.</h3>
							<div class="separador ">
								<a href="/login" class="btn-login ">Login</a>
								<a href="/register" class="btn-cadastro ">Cadastre-se</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="angulo"></div>
	</section>
        <section class="sobre-wrap">
            <div class="container">
                <div class="contenedor">
                    <h2 class="title-sobre ">Aqui você encontra</h2>
                    <p class="subtitle-sobre ">Lorem ipsum dolor sit amet consectetur adipiscing elit proin leo leo ornare nec vulputate tempus velit nam id purus tellus hendrerit mi dapibus</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 wow bounceInUp" >
                            <div class="sobre-box mx-auto">
                                <div class="icones d-flex">
                                    <i class="fab fa-html5 fa-5x html5 m-auto"></i>
                                </div>
                                <h5>Html 5</h5>
                                <p class=" mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit proin leo ornare!</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow bounceInUp">
                            <div class="sobre-box mx-auto">
                                <div class="icones d-flex">
                                    <i class="fab fa-css3 fa-5x css3 m-auto"></i>
                                </div>
                                <h5>CSS 3</h5>
                                <p class=" mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit proin leo ornare!</p>
                            </div>
                        </div>
                       <div class="col-md-6 col-lg-3 wow bounceInUp" >
                            <div class="sobre-box mx-auto">
                                <div class="icones d-flex">
                                    <i class="fab fa-android fa-5x android m-auto"></i>
                                </div>
                                <h5>Android</h5>
                                <p class=" mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit proin leo ornare!</p>
                            </div>
                        </div>
                       <div class="col-md-6 col-lg-3 wow bounceInUp">
                            <div class="sobre-box mx-auto">
                                <div class="icones d-flex">
                                    <i class="fab fa-php fa-5x drupal m-auto"></i>
                                </div>
                                <h5>PHP</h5>
                                <p class=" mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit proin leo ornare!</p>
                            </div>
                        </div>
                    </div>

                  
                </div>
            </div>
        </section>
 
		
		<!--Our Team-->
        <section class="time" id="team">
            <div class="container">
                <h2 class="title-time ">Nossos Fundadores</h2>
                <p class="subtitle-time ">Lorem ipsum dolor sit amet consectetur adipiscing elit proin leo leo ornare nec vulputate tempus velit nam id purus tellus hendrerit mi dapibus</p>

                <div class="row active-with-click">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-5">
                        <article class="material-card Red">
                            <h2>
                                <span>Siddharth Panchal</span>
                                <strong>
                                    <i class="fa fa-fw fa-magic"></i>
                                    Front-End-Developer
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-fluid" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="" draggable="false" oncontextmenu="return false;" />
                                </div>
                                <div class="mc-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ...
                                </div>
                            </div>
                            <a class="mc-btn-action ripple">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a target="_parent" href="#!" class="fa fa-fw fa-facebook ripple"></a>
                                <a target="_parent" href="#!"  class="fa fa-fw fa-twitter ripple"></a>
                                <a target="_parent" href="#!"  class="fa fa-fw fa-linkedin ripple"></a>
                                <a target="_parent" href="#!"  class="fa fa-fw fa-google-plus ripple"></a>
                            </div>
                        </article>
                    </div>
            </div>
        </section>


  
  
 
@endsection