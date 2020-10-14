
                @foreach ($duvidas as $item)
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0"><a href="/perfil/{{ $item->escritor->id }}/{{ $item->escritor->slug }}">{{ $item->escritor->user }}</a></div>
                                    <div class="h7 text-muted">{{ $item->escritor->name }}</div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock"></i> {{ $item->data }}</div>
                        <a class="card-link" href="/perguntas/{{ $item->id}}">
                            <h5 class="card-title">{{ $item->titulo }}</h5>
                        </a>

                        <p class="card-text">
                            <a href="/perguntas/{{ $item->id}}">
                                {{ Str::substr($item->pergunta, 0, 100) }}
                            </a>
                        </p>
                    </div>
                    
                </div>
                @endforeach
