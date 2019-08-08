@extends('layouts.front')

@section('content')
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15 ">
    <!-- Row -->
    <div class="row ">
        <div class="col-xl-12 col-md-12">
                <section class="mb-20">
                        <h5 class="hk-sec-title mb-25"">CATEGORIAS</h5>
                        <div class="row">
                            <div class="col-sm">
                                <div class="row">
                                        @foreach($allCategories as $category)
                                    <div class="col-lg-3 col-md-3 mb-15">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center list-group-inv bg-gradient-success">
                                                <div class="avatar">
                                                        <img src="{{asset('storage'.$category->logo)}}" alt="{!!$category->name!!}" class="avatar-img rounded-circle">
                                                </div>
                                                <a href="{!!route('classificados.front.list',array($category->id))!!}" class="text-white"><h6 class="text-white">{!!$category->name!!}</h6></a>
                                                <span class="badge badge-primary badge-pill">{!! $category->itemCount!!}</span>
                                            </li>
                                            @foreach($category->subCategory as $subcategory)   
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <a href="{!!route('classificados.front.list',array($subcategory->id))!!}" >{!!$subcategory->name!!}</a>
                                            <span class="badge badge-primary badge-pill">{{$subcategory->itemCount}}</span>
                                            </li>                               
                                            @endforeach	 
                                            
                                           
                                        </ul>
                                    </div>
                                    @endforeach 
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
           
        
    </div>
</div>
@endsection

@section('js_after')
      <!-- Owl JavaScript -->
    <script src="{{ asset('vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>

    <!-- Owl Init JavaScript -->
    <script src="{{ asset('dist/js/owl-data.js')}}"></script>
      
@endsection
