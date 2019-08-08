<div class="form-group{{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'Usuário', ['class' => 'control-label']) !!}
    {!! Form::number('user_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('texto_comentario') ? 'has-error' : ''}}">
    {!! Form::label('texto_comentario', 'Resposta', ['class' => 'control-label']) !!}
    {!! Form::textarea('texto_comentario', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('texto_comentario', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('reclama_id') ? 'has-error' : ''}}">
    {!! Form::label('reclama_id', 'Reclama Id', ['class' => 'control-label']) !!}
    {!! Form::text('reclama_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('reclama_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('status', '1') !!} Ativo</label>

    <label>{!! Form::radio('status', '0', true) !!} Inativo</label>
</div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('reclamante_id') ? 'has-error' : ''}}">
    {!! Form::label('reclamante_id', 'Reclamante Id', ['class' => 'control-label']) !!}
    {!! Form::number('reclamante_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('reclamante_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('concluida') ? 'has-error' : ''}}">
    {!! Form::label('concluida', 'Concluida', ['class' => 'control-label']) !!}
    {!! Form::text('concluida', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('concluida', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
