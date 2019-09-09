

<div class="row">
  <div class="form-group col-md-12">

    <span class="text-danger" style="font-size: 11px; letter-spacing: 0.06em; text-transform: uppercase; font-weight: 500;">Tamanho recomendado: <b>850 x 450 Pixels</b> </span>

   </div>
    <div class="form-group col-md-12">
      <input name="imagem_principal" class="form-control" type="file">
    </div>

    
   <hr>
  <div class="col-12">
    <div class="form-group{{ $errors->has('nome') ? 'has-error' : ''}}">
        {!! Form::label('nome', 'Nome', ['class' => 'control-label']) !!}
        {!! Form::text('nome', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
  <div class="col-6">
    <div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
            {!! Form::label('title', 'Categoria', ['class' => 'control-label']) !!}
            {!! Form::select('category_id', $categorias, $formMode === 'edit' ? $empresa->category_id: '',['class' => 'form-control']) !!}
            {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
  <div class="col-6">
    <div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
            {!! Form::label('pacote', 'Pacote', ['class' => 'control-label']) !!}
            {!! Form::select('empresa_package_id', $packages, $formMode === 'edit' ? $empresa->empresa_package_id: '',['class' => 'form-control']) !!}
            {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
  </div>

  <div class="col-12">
    <div class="form-group{{ $errors->has('description') ? 'has-error' : ''}}">
        {!! Form::label('description', 'Descrição', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
  <div class="col-12">
    <div class="form-group{{ $errors->has('horario_func') ? 'has-error' : ''}}">
        {!! Form::label('horario_func', 'Horario de Funcionamento', ['class' => 'control-label']) !!}
        {!! Form::textarea('horario_func', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('horario_func', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
    <div class="col-6">
      <div class="form-group{{ $errors->has('whatsapp') ? 'has-error' : ''}}">
          {!! Form::label('whatsapp', 'Whatsapp (somente numeros Ex: 8599998998)', ['class' => 'control-label']) !!}
          {!! Form::text('whatsapp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required', 'placeholder' => '8599999999'] : ['class' => 'form-control', 'placeholder' => '8599999999']) !!}
          {!! $errors->first('whatsapp', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="col-6">
      <div class="form-group{{ $errors->has('telefone') ? 'has-error' : ''}}">
          {!! Form::label('telefone', 'Telefone (somente numeros Ex: 8599998998)', ['class' => 'control-label']) !!}
          {!! Form::text('telefone', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required', 'placeholder' => '8599999999'] : ['class' => 'form-control', 'placeholder' => '8599999999']) !!}
          {!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="col-6">
      <div class="form-group{{ $errors->has('latitude') ? 'has-error' : ''}}">
          {!! Form::label('latitude', 'Latitude', ['class' => 'control-label']) !!}
          {!! Form::text('latitude', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('latitude', '<p class="help-block">:message</p>') !!}
          </small><a href="https://www.latlong.net/" target="_blank">buscar coordenadas </a></small>
      </div>
    </div>
    <div class="col-6">
      <div class="form-group{{ $errors->has('longitude') ? 'has-error' : ''}}">
          {!! Form::label('longitude', 'Longitude', ['class' => 'control-label']) !!}
          {!! Form::text('longitude', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('longitude', '<p class="help-block">:message</p>') !!}
        </small><a href="https://www.latlong.net/" target="_blank">buscar coordenadas </a></small>
      </div>
    </div>
    <div class="col-12">
      <div class="form-group{{ $errors->has('address') ? 'has-error' : ''}}">
          {!! Form::label('address', 'Endereço', ['class' => 'control-label']) !!}
          {!! Form::text('address', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('address', '<p class="help-block">:message</p>') !!}

      </div>
    </div>

    <!--
    <div class="col-4">
      <div class="form-group{{ $errors->has('tipo_conta_premium_id') ? 'has-error' : ''}}">
          {!! Form::label('tipo_conta_premium_id', 'Tipo Conta Premium Id', ['class' => 'control-label']) !!}
          {!! Form::number('tipo_conta_premium_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('tipo_conta_premium_id', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="col-4">
      <div class="form-group{{ $errors->has('total_reviews') ? 'has-error' : ''}}">
          {!! Form::label('total_reviews', 'Total Reviews', ['class' => 'control-label']) !!}
          {!! Form::number('total_reviews', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('total_reviews', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
  -->
    <div class="col-6">
      <div class="form-group{{ $errors->has('website_url') ? 'has-error' : ''}}">
          {!! Form::label('website_url', 'Website Url', ['class' => 'control-label']) !!}
          {!! Form::text('website_url', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('website_url', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="col-6">
      <div class="form-group{{ $errors->has('youtube') ? 'has-error' : ''}}">
          {!! Form::label('youtube', 'Youtube', ['class' => 'control-label']) !!}
          {!! Form::text('youtube', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('youtube', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="col-4">
      <div class="form-group{{ $errors->has('instagram') ? 'has-error' : ''}}">
          {!! Form::label('instagram', 'Instagram', ['class' => 'control-label']) !!}
          {!! Form::text('instagram', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('instagram', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="col-4">
      <div class="form-group{{ $errors->has('facebook') ? 'has-error' : ''}}">
          {!! Form::label('facebook', 'Facebook', ['class' => 'control-label']) !!}
          {!! Form::text('facebook', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('facebook', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="col-4">
      <div class="form-group{{ $errors->has('twitter') ? 'has-error' : ''}}">
          {!! Form::label('twitter', 'Twitter', ['class' => 'control-label']) !!}
          {!! Form::text('twitter', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('twitter', '<p class="help-block">:message</p>') !!}

      </div>
    </div>
    <div class="col-4">
        <div class="form-group{{ $errors->has('featured') ? 'has-error' : ''}}">
            {!! Form::label('featured', 'Destaque', ['class' => 'control-label']) !!}
            <div class="checkbox">
            <label>{!! Form::radio('featured', '1') !!} Sim</label>

            <label>{!! Form::radio('featured', '0', true) !!} Não</label>
        </div>
            {!! $errors->first('featured', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-4">
      <div class="form-group{{ $errors->has('status') ? 'has-error' : ''}}">
          {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
          <div class="checkbox">
          <label>{!! Form::radio('status', '1') !!} Ativo</label>

          <label>{!! Form::radio('status', '0', true) !!} Inativo</label>
      </div>
          {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="col-4">
      <div class="form-group{{ $errors->has('owner_user_id') ? 'has-error' : ''}}">
          {!! Form::label('owner_user_id', 'Proprietário', ['class' => 'control-label']) !!}
          {!! Form::number('owner_user_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('owner_user_id', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
</div>

<div class="form-group col-md-12">
        <label for="address">Palavras chaves(tags)</label>
    <select id="input_tags" name="tags" class="form-control" multiple="multiple">

    </select>
</div>

<div class="form-group col-md-12">

  <span class="text-danger" style="font-size: 11px; letter-spacing: 0.06em; text-transform: uppercase; font-weight: 500;">Tamanho recomendado: <b>850 x 450 Pixels</b> </span>

 </div>
  <div class="form-group col-md-12">
    <input name="files" class="input-file" type="file">
  </div>


 <hr>





<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Atualizar' : 'Cadastrar', ['class' => 'btn btn-primary']) !!}
</div>
