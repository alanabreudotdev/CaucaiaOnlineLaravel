@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ReclamaAnswer {{ $reclamaanswer->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/reclama-answer') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/reclama-answer/' . $reclamaanswer->id . '/edit') }}" title="Edit ReclamaAnswer"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/reclamaanswer', $reclamaanswer->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete ReclamaAnswer',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $reclamaanswer->id }}</td>
                                    </tr>
                                    <tr><th> User Id </th><td> {{ $reclamaanswer->user_id }} </td></tr><tr><th> Texto Comentario </th><td> {{ $reclamaanswer->texto_comentario }} </td></tr><tr><th> Reclama Id </th><td> {{ $reclamaanswer->reclama_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
