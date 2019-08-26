@extends('layouts.backend')

@section('content')
    <div class="container mt-50">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Nova Empresa</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/empresas') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/empresas', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.empresas.form', ['formMode' => 'create', 'files' => true])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
