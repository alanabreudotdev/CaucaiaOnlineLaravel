<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('icon_url') ? 'has-error' : ''}}">
    {!! Form::label('icon_url', 'Icone da categoria', ['class' => 'control-label']) !!}
    {!! Form::file('icon_url', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('icon_url', '<p class="help-block">:message</p>') !!}
    <br/><small>Recomendado tamanho 250 x 250 </small>
</div>
<div class="form-group{{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('status', '1', true) !!} Ativo</label>

    <label>{!! Form::radio('status', '0') !!} Não ativo</label>
</div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Atualizar' : 'Cadastrar', ['class' => 'btn btn-primary']) !!}
</div>
