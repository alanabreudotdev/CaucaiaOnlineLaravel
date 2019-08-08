<div class="form-group{{ $errors->has('icon') ? 'has-error' : ''}}">
        {!! Form::label('icon', 'Icone Categoria', ['class' => 'control-label']) !!}
        {!! Form::file('icon', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('icon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('icon_image_url') ? 'has-error' : ''}}">
        {!! Form::label('icon_image_url', 'Icone Mapa', ['class' => 'control-label']) !!}
        {!! Form::file('icon_image_url', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('icon_image_url', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('total_reclamacoes') ? 'has-error' : ''}}">
        {!! Form::label('total_reclamacoes', 'Total Reclamações', ['class' => 'control-label']) !!}
        {!! Form::number('total_reclamacoes', null, ('required' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
        {!! $errors->first('total_reclamacoes', '<p class="help-block">:message</p>') !!}
    </div>
<div class="form-group{{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('status', '1',true) !!} Ativo</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('status', '0') !!} Inativo</label>
</div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Atualizar' : 'Criar', ['class' => 'btn btn-primary']) !!}
</div>
