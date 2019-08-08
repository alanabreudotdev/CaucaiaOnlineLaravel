@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Notícias</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/news/create') }}" class="btn btn-success btn-sm" title="Add New News">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nova
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/news', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Pesquisar..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Imagem</th><th>Título</th><th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                    <td><div class="w-100 bg-light clearfix">
                                    <img height="127px" width="255px" src="@if($item->image_url) {{asset('storage/'.$item->image_url)}} @else  {{asset('dist/img/img-thumb1.jpg')}} @endif" class="img-fluid" alt="img">
                                       
                                    </div></td><td>{{ $item->title }}</td>
                                        <td width="150px">
                                            <a href="{{ url('/admin/news/' . $item->id) }}" title="View News"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/news/' . $item->id . '/edit') }}" title="Edit News"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/news', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete News',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $news->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
