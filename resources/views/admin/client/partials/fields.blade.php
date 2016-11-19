<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
    {!!Form::label('name', 'Name', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!!Form::text('name',null, array('class' => 'form-control', 'placeholder' => 'Name'))!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('reference', 'Reference', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!!Form::text('reference',null, array('class' => 'form-control', 'placeholder' => 'Reference'))!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('cellphone', 'Cellphone', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!!Form::text('cellphone',null, array('class' => 'form-control', 'placeholder' => 'cellphone'))!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('address', 'Address', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!!Form::text('address',null, array('class' => 'form-control', 'placeholder' => 'Address'))!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('enable', 'Enable', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!! Form::select('enable',array('si'=>'si','no'=>'no'), null, array('class'=>'form-control')) !!}
    </div>
</div>
