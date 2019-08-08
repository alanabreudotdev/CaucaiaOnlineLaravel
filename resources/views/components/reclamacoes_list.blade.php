<div class="row">
        <div class="col-12">
    @if(count($reclamacoes)>0)
    <div class="row mb-10">
            
        @foreach ($reclamacoes as $rcl )
        <div class="col-xl-6 mb-10 ">                       
                <div class="card card-profile-feed h-560p">
                        <div class="card-header card-header-action">
                            <div class="media align-items-center">
                                
                                <div class="media-body">
                                    <div class="text-capitalize font-weight-500 text-dark">{{$rcl->categories->name}}</div>
                                    <div class="font-13">{{\Carbon\Carbon::parse($rcl->created_at)->diffForHumans() }}</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center card-action-wrap">
                                <div class="inline-block dropdown">
                                    <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(15px, 24px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" href="#">Visualizar Reclamação</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Reportar Abuso</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                                    <div class="position-relative">
                                        <a href="/reclamar/ver/{{$rcl->id}}/{{$rcl->slug}}">
                                            @if($rcl->foto_url_01)
                                                <img class="card-img-top d-block h-280p" src="{{asset('storage'.$rcl->foto_url_01)}}" alt="{{$rcl->titulo}}">
                                            @else
                                                <img class="card-img-top d-block h-280p" src="{{asset('dist/img/default_reclamacao.jpg')}}" alt="{{$rcl->titulo}}">
                                            @endif
                                            <a href="/reclamar/ver/{{$rcl->id}}/{{$rcl->slug}}" class="btn btn-light btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-pg-link"><span class="icon-label"><i class="ion ion-md-link"></i></span><span class="btn-text">visualizar</span></a>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                    <h6 class="card-title"><a href="/reclamar/ver/{{$rcl->id}}/{{$rcl->slug}}">@if(strlen($rcl->titulo)>149){!!substr($rcl->titulo,0,150)!!}...@else {{$rcl->titulo}}@endif</a></h6>
                                            <small class="card-subtitle mb-2 text-muted">{{$rcl->endereco}}</small>
                                    </div>
                            
                        </div>
                        <div class="card-footer justify-content-between">
                            <div>
                                <a href="#!" id="reclamacao_apoio" onclick="apoioLike({{$rcl->id}})"><i class="ion-md-thumbs-up text-primary"></i><span class="apoios-{{$rcl->id}}">@if($rcl->apoio ==0) 0 @else{{$rcl->apoio}}  @endif</span> &nbsp; pessoas apoiaram</a>
                            </div>
                            <div>
                                
                            </div>
                        </div>
                    </div>
                </div>       
                    
            @endforeach
       
    </div>
                @else   
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start mb-30">
                    <div class="d-flex w-100 justify-content-center">
                        <h5 class="mb-1">nenhuma reclamação encontrada</h5>
                                        
                    </div>
                </a>
                <a href="/reclamar" class="d-flex w-100 justify-content-center">Voltar</a>
             @endif
            </div>
</div>