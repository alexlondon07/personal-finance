@extends('template.generic_admin')

@section('head_content')
@stop

@section('body_content')
  <div class="container-fluid">
    <div class="row">
      <div class="main">

        <h2 class="page-header">Products</h2>

        <!--Mensajes-->
        @include('admin.alert.messages-success')
        <!--Fin Mensajes-->

        <div class="row">
          <div class="col-sm-12">
            <a style="margin:0px 0 15px" href="{!! URL::to('/') !!}/admin/product/create" class="btn btn-primary pull-right">Create Product</a>
          </div>
        </div>

        <div class="table-responsive">
          @if (count($items) > 0)
            <table id="products" class="table table-striped">
              @if($items->isEmpty())
                <div class="well text-center">No records found</div>
              @else
                <thead>
                  <tr>
                    <th>Actions</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Enable</th>
                    <th>Photo</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($items as $item)
                    <tr>
                      <td style="width: 150px !important">
                        <table>
                          <tr>
                            <td><a title="View" href="{!! URL::to('/') !!}/admin/product/{!! $item->slug !!}"><span class="glyphicon glyphicon-eye-open btn btn-default btn-xs"></span></a></td>
                            <td><a title="Edit" href="{!! URL::to('/') !!}/admin/product/{!! $item->id !!}/edit"><span class="glyphicon glyphicon-pencil btn btn-default btn-xs"></span></a></td>
                            <td>
                              {!! Form::open(['action' => ['ProductController@destroy', $item->id], 'method' => 'delete', 'style' => 'display: inline;']) !!}
                                <button title="Delete" type="submit" onclick="return Util.confirmDelete(this);" class="glyphicon glyphicon-trash btn btn-default btn-xs"></button>
                              {!! Form::close() !!}
                            </td>
                          </tr>
                        </table>
                      </td>
                      <td>{!! $item->code !!}</td>
                      <td>{!! $item->name !!}</td>
                      <td>{!! $item->description !!}</td>
                      <td>{!! $item->enable !!}</td>
                      <td>
                        @if(count($item->attachment) > 0)
                          <a href="{!! URL::to('/') . DIRECTORY_SEPARATOR . $item->attachment[0]->upload_path . DIRECTORY_SEPARATOR .  $item->attachment[0]->name !!}" target="_blank" >
                            <img src="{!! URL::to('/') . DIRECTORY_SEPARATOR . $item->attachment[0]->upload_path . DIRECTORY_SEPARATOR .  $item->attachment[0]->name !!}" style="max-height: 50px"/>
                          </a>
                        @endif
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              @endif
            </table>
          @else
            There is no data!
          @endif
        </div>
      </div>
    </div>
  </div>
@stop

@section('javascript_content')
  <script type="text/javascript" src="{{ URL::to('/') }}/js/Product.js"></script>
@stop
