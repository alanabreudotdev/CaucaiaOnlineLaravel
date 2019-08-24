

<div class="row">
  <div class="col-9">
    <div class="form-group{{ $errors->has('nome') ? 'has-error' : ''}}">
        {!! Form::label('nome', 'Nome', ['class' => 'control-label']) !!}
        {!! Form::text('nome', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
  <div class="col-3">
    <div class="form-group{{ $errors->has('featured') ? 'has-error' : ''}}">
        {!! Form::label('featured', 'Featured', ['class' => 'control-label']) !!}
        <div class="checkbox">
        <label>{!! Form::radio('featured', '1') !!} Yes</label>

        <label>{!! Form::radio('featured', '0', true) !!} No</label>
    </div>
        {!! $errors->first('featured', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
  <div class="col-12">
    <div class="form-group{{ $errors->has('description') ? 'has-error' : ''}}">
        {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
    <div class="col-6">
      <div class="form-group{{ $errors->has('whatsapp') ? 'has-error' : ''}}">
          {!! Form::label('whatsapp', 'Whatsapp', ['class' => 'control-label']) !!}
          {!! Form::text('whatsapp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('whatsapp', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="col-6">
      <div class="form-group{{ $errors->has('telefone') ? 'has-error' : ''}}">
          {!! Form::label('telefone', 'Telefone', ['class' => 'control-label']) !!}
          {!! Form::text('telefone', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="col-6">
      <div class="form-group{{ $errors->has('latitude') ? 'has-error' : ''}}">
          {!! Form::label('latitude', 'Latitude', ['class' => 'control-label']) !!}
          {!! Form::number('latitude', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('latitude', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="col-6">
      <div class="form-group{{ $errors->has('longitude') ? 'has-error' : ''}}">
          {!! Form::label('longitude', 'Longitude', ['class' => 'control-label']) !!}
          {!! Form::number('longitude', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('longitude', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="col-12">
      <div class="form-group{{ $errors->has('address') ? 'has-error' : ''}}">
          {!! Form::label('address', 'Address', ['class' => 'control-label']) !!}
          {!! Form::text('address', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="col-4">
      <div class="form-group{{ $errors->has('category_id') ? 'has-error' : ''}}">
          {!! Form::label('category_id', 'Category Id', ['class' => 'control-label']) !!}
          {!! Form::number('category_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
          {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
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
</div>













<div class="form-group{{ $errors->has('foto_01') ? 'has-error' : ''}}">
    {!! Form::label('foto_01', 'Foto 01', ['class' => 'control-label']) !!}
    {!! Form::text('foto_01', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto_01', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('foto_02') ? 'has-error' : ''}}">
    {!! Form::label('foto_02', 'Foto 02', ['class' => 'control-label']) !!}
    {!! Form::text('foto_02', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto_02', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('foto_03') ? 'has-error' : ''}}">
    {!! Form::label('foto_03', 'Foto 03', ['class' => 'control-label']) !!}
    {!! Form::text('foto_03', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto_03', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('foto_04') ? 'has-error' : ''}}">
    {!! Form::label('foto_04', 'Foto 04', ['class' => 'control-label']) !!}
    {!! Form::text('foto_04', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto_04', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('foto_05') ? 'has-error' : ''}}">
    {!! Form::label('foto_05', 'Foto 05', ['class' => 'control-label']) !!}
    {!! Form::text('foto_05', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto_05', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('foto_06') ? 'has-error' : ''}}">
    {!! Form::label('foto_06', 'Foto 06', ['class' => 'control-label']) !!}
    {!! Form::text('foto_06', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto_06', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('foto_07') ? 'has-error' : ''}}">
    {!! Form::label('foto_07', 'Foto 07', ['class' => 'control-label']) !!}
    {!! Form::text('foto_07', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto_07', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('foto_08') ? 'has-error' : ''}}">
    {!! Form::label('foto_08', 'Foto 08', ['class' => 'control-label']) !!}
    {!! Form::text('foto_08', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto_08', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('foto_09') ? 'has-error' : ''}}">
    {!! Form::label('foto_09', 'Foto 09', ['class' => 'control-label']) !!}
    {!! Form::text('foto_09', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto_09', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('foto_10') ? 'has-error' : ''}}">
    {!! Form::label('foto_10', 'Foto 10', ['class' => 'control-label']) !!}
    {!! Form::text('foto_10', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto_10', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('status', '1') !!} Yes</label>

    <label>{!! Form::radio('status', '0', true) !!} No</label>
</div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('owner_user_id') ? 'has-error' : ''}}">
    {!! Form::label('owner_user_id', 'Owner User Id', ['class' => 'control-label']) !!}
    {!! Form::number('owner_user_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('owner_user_id', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Atualizar' : 'Cadastrar', ['class' => 'btn btn-primary']) !!}
</div>
