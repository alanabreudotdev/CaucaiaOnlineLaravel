@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Classificado - Categorias</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/classificado-category/create') }}" class="btn btn-success btn-sm" title="Add New ClassificadoCategory">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nova categoria
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/classificado-category', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
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
                                        <th>#</th><th>Nome</th><th>Categoria Pai</th><th>Publicado</th><th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($classificadocategory as $item)
                                
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td><td>@if($item->parent_id != 0){{ $item->children->name }}@else - @endif</td><td>{{ $item->published }}</td>
                                        <td>
                                            <a href="{{ url('/admin/classificado-category/' . $item->id) }}" title="View ClassificadoCategory"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/classificado-category/' . $item->id . '/edit') }}" title="Edit ClassificadoCategory"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/classificado-category', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete ClassificadoCategory',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $classificadocategory->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
