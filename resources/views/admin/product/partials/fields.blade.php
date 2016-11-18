<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    {!!Form::label('file', 'Photo', array('class' => 'control-label col-md-4'))!!}
        <div class="col-md-6">
        <input type="file" name="file" accept="image/*"/>
    </div>
</div>
<div class="form-group">
    {!!Form::label('code', 'Code', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!!Form::text('code',null, array('class' => 'form-control', 'placeholder' => 'Code'))!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('name', 'Name', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!!Form::text('name',null, array('class' => 'form-control', 'placeholder' => 'Name'))!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('cost', 'Cost', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!!Form::number('cost',null, array('class' => 'form-control', 'placeholder' => 'Cost'))!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('price', 'Price', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!!Form::number('price',null, array('class' => 'form-control', 'placeholder' => 'Price'))!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('description', 'Description', array('class' => 'control-label col-md-4'))!!}
    <div class="col-md-6">
        {!!Form::textarea('description',null, array('class' => 'form-control', 'placeholder' => 'Description'))!!}
    </div>
</div>
