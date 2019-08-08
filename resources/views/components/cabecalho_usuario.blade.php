<div class="profile-cover-wrap overlay-wrap bg-light">
        <div class="profile-cover-img" style="background-image:url('{{ asset('dist/img/fundo_perfil.jpg')}}"></div>
        <div class="bg-overlay bg-trans-dark-60"></div>
        <div class="container-fluid profile-cover-content py-50">
            <div class="hk-row"> 
                <div class="col-lg-12">
                    <div class="media align-items-center">
                        <div class="media-img-wrap  d-flex">
                            <div class="avatar">
                                    <img src="@if(Auth::user()->photo_url) {{ asset('storage'.Auth::user()->photo_url) }} @else {{ asset('dist/img/img-thumb.jpg')}} @endif" alt="{{ Auth::user()->name }}" class="avatar-img rounded-circle">
                                </div>
                        </div>
                        <div class="media-body ">
                        <div class="text-white text-capitalize display-6 mb-5 font-weight-400">{{ Auth::user()->name }}</div>
                            <div class="font-14 text-white"><span class="mr-5"><span class="font-weight-500 pr-5">{{ Auth::user()->email }}</span></div>
                        </div>
                    </div>
                </div>
                
               
            </div>
        </div>
    </div>