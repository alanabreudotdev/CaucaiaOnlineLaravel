<div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Título', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Conteúdo', ['class' => 'control-label']) !!}
    {!! Form::textarea('content', null, ['class' => 'form-control crud-richtext']) !!}
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Atualizar' : 'Criar', ['class' => 'btn btn-primary']) !!}
</div>
