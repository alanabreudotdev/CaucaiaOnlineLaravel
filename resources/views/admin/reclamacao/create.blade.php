@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Nova Reclamação</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/reclamacao') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/reclamacao', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.reclamacao.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_after')
<script>
        $('#reclama_category_id').on('change', function(e){
            var category_id = e.target.value;
            $.getJSON('/admin/reclamacao-categorias/' + category_id, function(data) {
                $('#reclama_sub_category_id').empty();
                $('#reclama_sub_category_id').append("<option value=''>Selecione uma opção</option>");
                
                $.map(data, function(val, key) {
                    $('#reclama_sub_category_id').append("<option value='"+ key +"'>" + val + "</option>");
                    });
                
            });
        });
</script>
@endsection
