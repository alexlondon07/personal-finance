@extends('template.generic_admin')

@section('head_content')
@stop
@section('body_content')
  <hr>
  @if(!$show)
    <div class="container-fluid">
      <div class="row">
          <div>
              <h1>@if($product->id) Edit @else Create @endif Product</h1>
              <div class="panel-body">

                {{-- Mensajes de validaciones del formulario --}}
                @include ('admin.alert.messages-validations')
                {{-- Fin Mensajes de validaciones del formulario --}}

                @if($product->id)
                  {!! Form::model($product, ['id' => 'form_product', 'route' => ['admin.product.update', $product], 'method' => 'put', 'role'=>'form', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                @else
                  {!!Form::model($product, ['id' => 'form_product', 'route' => 'admin.product.store', 'role'=>'form', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                @endif

                {{--Se valida que si lleguen datos correctos--}}
                @if (!empty($product))

                  @if($product->id)
                    @include ('admin.product.partials.attachment')
                  @endif

                  {{-- Campos del formulario --}}
                  @include ('admin.product.partials.fields')
                  {{-- Fin Campos del formulario --}}

                  <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                      {!! Form::submit('Save', array('class' =>'btn btn-primary', 'name'=>'save_button')) !!}
                      <span></span>
                      <a href="{{URL::to('/')}}/admin/product" class="btn btn-info">Cancel</a>
                    </div>
                  </div>

                @else
                  <p class="">There is no information for this item</p>
                @endif
                {!! Form::close() !!}
              </div>
            </div>
        </div>
      </div>
    @else
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">View</h3>
              </div>
              <div class="panel-body">
                {!! Form::model($product, ['id' => 'form_product',  'role'=>'form', 'class'=>'form-horizontal']) !!}
                @if (!empty($product))

                  @if($product->id)
                    @include ('admin.product.partials.attachment')
                  @endif

                  {{-- Campos del formulario --}}
                  @include ('admin.product.partials.fields')
                  {{-- Fin Campos del formulario --}}

                @else
                  <p class="">There is no information for this item</p>
                @endif
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-4">
                    <a href="{{URL::to('/')}}/admin/product" class="btn btn-info">Back</a>
                  </div>
                </div>
                {!! Form::close() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
  @stop
  @section('javascript_content')
  @stop
