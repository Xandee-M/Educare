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
                <div class="card gedf-card box-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-2">
                            <img class="rounded-circle" width="45" src="https://picsum.photos/50/50">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="message">send</label>
                                    <textarea name="form-control" id="message" rows="1" placeholder="O que está pensando?"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card gedf-card box-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" >
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0 theme-color">@_#####</div>
                                    <div class="h7 text-muted">#####</div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="svg-inline--fa fa-ellipsis-h fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                    <a class="dropdown-item" href="#">Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="card-body">
                            <div class="text-muted h7 mb-2 text-white">
                                <svg class="svg-inline--fa fa-user-clock fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M496 224c-79.6 0-144 64.4-144 144s64.4 144 144 144 144-64.4 144-144-64.4-144-144-144zm64 150.3c0 5.3-4.4 9.7-9.7 9.7h-60.6c-5.3 0-9.7-4.4-9.7-9.7v-76.6c0-5.3 4.4-9.7 9.7-9.7h12.6c5.3 0 9.7 4.4 9.7 9.7V352h38.3c5.3 0 9.7 4.4 9.7 9.7v12.6zM320 368c0-27.8 6.7-54.1 18.2-77.5-8-1.5-16.2-2.5-24.6-2.5h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h347.1c-45.3-31.9-75.1-84.5-75.1-144zm-96-112c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128z"></path>
                                </svg> 10m 
                            </div>
                                <a class="card-link" href="#">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
                                </a>
                                <p class="card-text text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
                                    sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                                </p>
                        </div>
                    <div class="card-footer">
                        <a href="#" class="card-link">
                            <svg class="svg-inline--fa fa-bell fa-w-14" aria-hidden="true" focusable="false" data-prefix="far" data-icon="bell" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M439.39 362.29c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71zM67.53 368c21.22-27.97 44.42-74.33 44.53-159.42 0-.2-.06-.38-.06-.58 0-61.86 50.14-112 112-112s112 50.14 112 112c0 .2-.06.38-.06.58.11 85.1 23.31 131.46 44.53 159.42H67.53zM224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64z"></path>
                            </svg> Follow
                        </a>
                        <a href="#" class="card-link">
                            <svg class="svg-inline--fa fa-comment fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="comment" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32z"></path>
                            </svg> Reply
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection