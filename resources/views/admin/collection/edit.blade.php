@extends('admin.layout.main') @section('main')
<div id="layoutSidenav">
  @include('admin.layout.inc.side-nav')
  <div id="layoutSidenav_content">
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Hi Admin Welcome Back</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                  <a href="#">Dashboard</a>
                </li>
                {{--
                                <li class="breadcrumb-item">
                                    <a href="#">Homepage Contents</a>
                                </li>
                                --}}
                <li class="breadcrumb-item active">Edit</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- Messages -->

              <!-- general form elements -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Edit Collection</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                  <form action="{{ route('collection.update', $collection->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')

                    <div class="col-md-12">
                      <label for="taglineInput">Category</label>
                      <input type="text" name="name" class="form-control" value="{{ old('name', $collection->name) }}" placeholder="Page tilte here" />
                    </div>
                    <div class="form-group mb-3">
                      <label for="select2Multiple">Multiple Product</label>
                      <select class="select2-multiple form-control" name="product_id[]" multiple="multiple" id="select2Multiple">
                        <option value="">
                          -- Select Products--
                        </option>
                        @foreach($products as $product)

                        <!-- <option value="{{ $product->id }}">{{ $product->name }}</option> -->
                        <option value="{{$product->id }}" {{$product->id == $collection->product ? 'selected' : 'old' }}> {{$product->name}}</option>
                        <!-- <option value="{{$product->id }}" {{is_array($collection->product) && in_array($product->id, $collection->product) ? 'selected' : '' }}> {{$product->name}}</option> -->

                        <!-- {{$product->name}} -->

                        @endforeach
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" {{ $collection->status == 1 ? "checked" : ""}} name="status">
                        <label class="custom-control-label" for="customSwitch1">Want to published?</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">
                        Update
                      </button>
                    </div>
                  </form>
                </div>
                <!-- form start -->
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
  </div>
</div>