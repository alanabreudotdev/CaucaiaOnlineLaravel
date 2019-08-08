@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Classificado - Anúncios</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/classificado-item/create') }}" class="btn btn-success btn-sm" title="Add New ClassificadoItem">
                            <i class="fa fa-plus" aria-hidden="true"></i> Novo anúncio
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/classificado-item', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
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
                                        <th>#</th><th>Categoria Id</th><th>Titulo</th><th>Alias</th><th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($classificadoitem as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->category_id }}</td><td>{{ $item->titulo }}</td><td>{{ $item->alias }}</td>
                                        <td>
                                            <a href="{{ url('/admin/classificado-item/' . $item->id) }}" title="View ClassificadoItem"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/classificado-item/' . $item->id . '/edit') }}" title="Edit ClassificadoItem"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/classificado-item', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete ClassificadoItem',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $classificadoitem->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
