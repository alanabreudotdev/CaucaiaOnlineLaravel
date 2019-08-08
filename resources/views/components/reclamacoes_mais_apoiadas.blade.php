       
                <div class="hk-pg-header mb-0 mt-30">
                    <div>
                        <h4 class="hk-pg-title mb-10">Reclamações mais apoiadas</h4>
                    </div>
                </div>
            
                <div class="card card-profile-feed">
                        <ul class="list-group list-group-flush">
                            @foreach ($maisApoiadas as $rcl )
                            <li class="list-group-item border-0">
                                    <div class="media align-items-center">
                                        <div class="d-flex media-img-wrap mr-15">
                                            <div class="avatar avatar-sm">
                                                <img src="{{asset('storage'.$rcl->foto_url_01)}}" alt="{{$rcl->titulo}}" class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                        <span class="d-block text-dark text-capitalize"><a href="/reclamar/ver/{{$rcl->id}}/{{$rcl->slug}}">{{substr($rcl->titulo,0,30)}} ... </a></span>
                                        <span class="d-block font-13">{{$rcl->categories->name}}</span>
                                        </div>
                                    <a href="#" class="text-light-40 ml-auto"><i class="ion-md-thumbs-up text-success"></i> @if($rcl->apoio) {{$rcl->apoio}} @else 0 @endif</a>
                                    </div>
                                </li>
                            @endforeach
                            
                        </ul>
                </div>
     


