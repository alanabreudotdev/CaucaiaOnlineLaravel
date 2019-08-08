<div class="form-group{{ $errors->has('reclama_category_id') ? 'has-error' : ''}}">
        {!! Form::label('title', 'Categoria', ['class' => 'control-label']) !!}
        {!! Form::select('reclama_category_id', $categories, ($formMode === 'edit') ? $reclamacao->reclama_category_id : '' , ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required', 'id'=>'reclama_category_id'] : ['class' => 'form-control',  'id'=>'reclama_category_id']) !!}
        {!! $errors->first('reclama_category_id', '<p class="help-block">:message</p>') !!}
</div>  
<div class="form-group{{ $errors->has('reclama_sub_category_id') ? 'has-error' : ''}}">
        {!! Form::label('title', 'Subcategoria', ['class' => 'control-label']) !!}
        {!! Form::select('reclama_sub_category_id', $sub_categories, ($formMode === 'edit') ? $reclamacao->reclama_sub_category_id : '' , ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required',  'id'=>'reclama_sub_category_id'] : ['class' => 'form-control',  'id'=>'reclama_sub_category_id']) !!}
        {!! $errors->first('reclama_sub_category_id', '<p class="help-block">:message</p>') !!}
</div>  
<div class="form-group{{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'Usuário', ['class' => 'control-label']) !!}
    {!! Form::number('user_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! Form::text('', 'teest', ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('titulo') ? 'has-error' : ''}}">
    {!! Form::label('titulo', 'Titulo', ['class' => 'control-label']) !!}
    {!! Form::text('titulo', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('texto_reclamacao') ? 'has-error' : ''}}">
    {!! Form::label('texto_reclamacao', 'Texto Reclamacao', ['class' => 'control-label ']) !!}
    {!! Form::textarea('texto_reclamacao', null, ('required' == 'required') ? ['class' => 'form-control crud-richtext', 'required' => 'required'] : ['class' => 'form-control crud-richtext']) !!}
    {!! $errors->first('texto_reclamacao', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('foto_url_01') ? 'has-error' : ''}}">
    {!! Form::label('foto_url_01', 'Foto Url 01', ['class' => 'control-label']) !!}
    {!! Form::text('foto_url_01', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto_url_01', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('foto_url_02') ? 'has-error' : ''}}">
    {!! Form::label('foto_url_02', 'Foto Url 02', ['class' => 'control-label']) !!}
    {!! Form::text('foto_url_02', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto_url_02', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('foto_url_03') ? 'has-error' : ''}}">
    {!! Form::label('foto_url_03', 'Foto Url 03', ['class' => 'control-label']) !!}
    {!! Form::text('foto_url_03', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto_url_03', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('endereco') ? 'has-error' : ''}}">
    {!! Form::label('endereco', 'Endereco', ['class' => 'control-label']) !!}
    {!! Form::text('endereco', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('endereco', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('celular') ? 'has-error' : ''}}">
    {!! Form::label('celular', 'Celular', ['class' => 'control-label']) !!}
    {!! Form::text('celular', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('celular', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('telefone') ? 'has-error' : ''}}">
    {!! Form::label('telefone', 'Telefone', ['class' => 'control-label']) !!}
    {!! Form::text('telefone', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('status', '1') !!} Ativo</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('status', '0', true) !!} Inativo</label>
</div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('solucionada') ? 'has-error' : ''}}">
    {!! Form::label('solucionada', 'Solucionada', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('solucionada', '1') !!} Sim</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('solucionada', '0', true) !!} Não</label>
</div>
    {!! $errors->first('solucionada', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Atualizar' : 'Criar', ['class' => 'btn btn-primary']) !!}
</div>
