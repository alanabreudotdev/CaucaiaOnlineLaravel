
        <div class="">
                <div class="hk-pg-header mb-0">
                    <div>
                        <h4 class="hk-pg-title mb-10">+ reclamados</h4>
                    </div>
                </div>

                <div class="card-body pa-0">
                    <ul class="list-group">
                        @foreach($categorias as $cat)
                            <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                                <span><img class="img-fluid float-left mr-5" width="21px" src="{{asset('storage'.$cat->icon)}}" alt="{{$cat->name}}" ><a href="/reclamar/listar/{{$cat->id}}">{{$cat->name}}</a></span>
                                <span class="badge badge-success badge-pill">@if($cat->total_reclamacoes){{$cat->total_reclamacoes}} @else 0 @endif</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
        </div>
