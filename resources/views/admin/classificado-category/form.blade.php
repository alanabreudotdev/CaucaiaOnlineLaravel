<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('Parent Id') ? 'has-error' : ''}}">
        {!! Form::label('parent_id', 'Categoria', ['class' => 'control-label']) !!}
        {!! Form::select('parent_id', $categorias, ($formMode === 'edit') ? $classificadocategory->category_id : '', ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('parent_id', '<p class="help-block">:message</p>') !!}
</div>   
<div class="form-group{{ $errors->has('published') ? 'has-error' : ''}}">
        {!! Form::label('published', 'Publicado', ['class' => 'control-label']) !!}
        <div class="checkbox">
        <label>{!! Form::radio('published', '1', true) !!} Sim</label>
    
        <label>{!! Form::radio('published', '0') !!} Não</label>
</div>
        {!! $errors->first('published', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('logo') ? 'has-error' : ''}}">
            {!! Form::label('logo', 'Logo', ['class' => 'control-label']) !!}
            {!! Form::file('logo', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('alias') ? 'has-error' : ''}}">
    {!! Form::label('alias', 'Alias', ['class' => 'control-label']) !!}
    {!! Form::text('alias', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('alias', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Atualizar' : 'Criar', ['class' => 'btn btn-primary']) !!}
</div>
