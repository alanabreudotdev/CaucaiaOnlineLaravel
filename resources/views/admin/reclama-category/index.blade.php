@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Reclamações - Categoria</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/reclama-category/create') }}" class="btn btn-success btn-sm" title="Add New ReclamaCategory">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nova
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/reclama-category', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
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
                                        <th>#</th><th>Nome</th><th>Status</th><th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($reclamacategory as $item)
                                    <tr>
                                        <td>{{  $item->id }}</td>
                                        <td>{{ $item->name }}</td><td>@if( $item->status ==1) Ativo @else Inativo @endif</td>
                                        <td>
                                            <a href="{{ url('/admin/reclama-category/' . $item->id) }}" title="View ReclamaCategory"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/reclama-category/' . $item->id . '/edit') }}" title="Edit ReclamaCategory"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/reclama-category', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Apagar Categoria',
                                                        'onclick'=>'return confirm("Confirma apagar?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $reclamacategory->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
