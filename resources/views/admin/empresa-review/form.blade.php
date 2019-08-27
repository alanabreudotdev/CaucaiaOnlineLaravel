<div class="form-group{{ $errors->has('note') ? 'has-error' : ''}}">
    {!! Form::label('note', 'Note', ['class' => 'control-label']) !!}
    {!! Form::number('note', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('note', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'User Id', ['class' => 'control-label']) !!}
    {!! Form::number('user_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('comment') ? 'has-error' : ''}}">
    {!! Form::label('comment', 'Comment', ['class' => 'control-label']) !!}
    {!! Form::text('comment', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
    <div class="checkbox">
    <label>{!! Form::radio('%1$s', '1') !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('%1$s', '0', true) !!} No</label>
</div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('empresa_id') ? 'has-error' : ''}}">
    {!! Form::label('empresa_id', 'Empresa Id', ['class' => 'control-label']) !!}
    {!! Form::text('empresa_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('empresa_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
