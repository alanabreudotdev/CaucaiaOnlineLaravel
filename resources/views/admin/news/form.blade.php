
<div class="form-group{{ $errors->has('destaque') ? 'has-error' : ''}}">
        {!! Form::label('destaque', 'Destaque', ['class' => 'control-label']) !!}
        <div class="checkbox">
        <label>{!! Form::radio('destaque', '1') !!} Sim</label>

        <label>{!! Form::radio('destaque', '0', true) !!} Não</label>
    </div>
        {!! $errors->first('destaque', '<p class="help-block">:message</p>') !!}
    </div>
<div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
        {!! Form::label('title', 'Categoria', ['class' => 'control-label']) !!}
        {!! Form::select('category_id', $categories, '',['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Título', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('slug') ? 'has-error' : ''}}">
    {!! Form::label('slug', 'Slug', ['class' => 'control-label']) !!}
    {!! Form::text('slug', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
    {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Descrição', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ('required' == 'required') ? ['class' => 'form-control ', 'required' => 'required'] : ['class' => 'form-control crud-richtext']) !!}
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image_url') ? 'has-error' : ''}}">
    {!! Form::label('image_url', 'Image Url', ['class' => 'control-label']) !!}
    {!! Form::file('image_url', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image_url', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('tags') ? 'has-error' : ''}}">
    {!! Form::label('tags', 'Tags', ['class' => 'control-label']) !!}
    {!! Form::text('tags', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    <small>Separar as palavras com "vírgulas"</small>
    {!! $errors->first('tags', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('status', '1', true) !!} Ativo</label>

    <label>{!! Form::radio('status', '0') !!} Inativo</label>
</div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Atualizar' : 'Criar', ['class' => 'btn btn-primary']) !!}
</div>
