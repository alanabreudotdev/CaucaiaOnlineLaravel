<div class="form-group{{ $errors->has('titulo') ? 'has-error' : ''}}">
        {!! Form::label('inputCategory', 'Categoria', array('class'=> ' control-label')) !!}                        
        
          <select name="category_id" class="form-control " id="inputCategory">
          @foreach($categories as $category)
            <option value="{!!$category->id!!}">{!!$category->name!!}</option>
            if($category->subCategory)
                @foreach($category->subCategory as $subcategory)
                    <option value="{!!$subcategory->id!!}">|--{!!$subcategory->name!!}</option>
                @endforeach    
            @end if
          @endforeach
          </select>
        
</div> 
<div class="form-group{{ $errors->has('titulo') ? 'has-error' : ''}}">
    {!! Form::label('titulo', 'Titulo', ['class' => 'control-label']) !!}
    {!! Form::text('titulo', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('alias') ? 'has-error' : ''}}">
    {!! Form::label('alias', 'Alias', ['class' => 'control-label']) !!}
    {!! Form::text('alias', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('alias', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('descricao') ? 'has-error' : ''}}">
    {!! Form::label('descricao', 'Descricao', ['class' => 'control-label']) !!}
    {!! Form::textarea('descricao', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('descricao', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('cidade_id') ? 'has-error' : ''}}">
    {!! Form::label('cidade_id', 'Cidade Id', ['class' => 'control-label']) !!}
    {!! Form::number('cidade_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('cidade_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('bairro_id') ? 'has-error' : ''}}">
    {!! Form::label('bairro_id', 'Bairro Id', ['class' => 'control-label']) !!}
    {!! Form::number('bairro_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('bairro_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('preco') ? 'has-error' : ''}}">
    {!! Form::label('preco', 'Preco', ['class' => 'control-label']) !!}
    {!! Form::number('preco', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('preco', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('tipo') ? 'has-error' : ''}}">
    {!! Form::label('tipo', 'Tipo', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('tipo', '1') !!} Yes</label>
    <label>{!! Form::radio('tipo', '0', true) !!} No</label>
</div>
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('endereco') ? 'has-error' : ''}}">
    {!! Form::label('endereco', 'Endereco', ['class' => 'control-label']) !!}
    {!! Form::text('endereco', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('endereco', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('numero') ? 'has-error' : ''}}">
    {!! Form::label('numero', 'Numero', ['class' => 'control-label']) !!}
    {!! Form::text('numero', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('numero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('complemento') ? 'has-error' : ''}}">
    {!! Form::label('complemento', 'Complemento', ['class' => 'control-label']) !!}
    {!! Form::text('complemento', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('complemento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('cep') ? 'has-error' : ''}}">
    {!! Form::label('cep', 'Cep', ['class' => 'control-label']) !!}
    {!! Form::text('cep', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('cep', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('telefone') ? 'has-error' : ''}}">
    {!! Form::label('telefone', 'Telefone', ['class' => 'control-label']) !!}
    {!! Form::text('telefone', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('tags') ? 'has-error' : ''}}">
    {!! Form::label('tags', 'Tags', ['class' => 'control-label']) !!}
    {!! Form::text('tags', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tags', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('visualizacoes') ? 'has-error' : ''}}">
    {!! Form::label('visualizacoes', 'Visualizacoes', ['class' => 'control-label']) !!}
    {!! Form::number('visualizacoes', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('visualizacoes', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('published') ? 'has-error' : ''}}">
    {!! Form::label('published', 'Published', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('published', '1') !!} Sim</label>
    <label>{!! Form::radio('published', '0', true) !!} Não</label>
</div>
    {!! $errors->first('published', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'User Id', ['class' => 'control-label']) !!}
    {!! Form::number('user_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('lat') ? 'has-error' : ''}}">
    {!! Form::label('lat', 'Lat', ['class' => 'control-label']) !!}
    {!! Form::number('lat', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('lat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('lng') ? 'has-error' : ''}}">
    {!! Form::label('lng', 'Lng', ['class' => 'control-label']) !!}
    {!! Form::number('lng', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('lng', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
    {!! Form::text('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Atualizar' : 'Criar', ['class' => 'btn btn-primary']) !!}
</div>
