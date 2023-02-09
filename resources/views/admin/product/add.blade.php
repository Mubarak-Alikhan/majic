@extends('admin.layout.main') @section('main')
<div id="layoutSidenav">
  @include('admin.layout.inc.side-nav')

  <div id="layoutSidenav_content">
    <div class="container-fluid">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-9">
              <h1>Create Product</h1>
            </div>
            <div class="col-sm-3">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                  <a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="{{ route('product') }}">Product</a>
                </li>
                <li class="breadcrumb-item active">Add</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Add Product</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-12 pr-1">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="" class="form-control" placeholder="name here" />
                  </div>
                </div>
                <div class="mb-3">
                  <label for="formFileMultiple" class="form-label"> Image </label>
                  <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>
                </div>
                <div class="col-md-12 pr-1">
                  <div class="form-group">
                    <label for="inputAddress">Description</label>
                    <textarea class="form-control" rows="10" name="description" id="inputAddress" placeholder="add description here........"></textarea>
                  </div>
                </div>
                <div class="col-md-12 pr-1">
                  <div class="form-group">
                    <label>Material</label>
                    <input type="text" name="material" value="" class="form-control" placeholder="name here" />
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="taglineInput">selling_price</label>
                    <input type="number" name="selling_price" class="form-control" placeholder="selling_price" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="taglineInput">Last_price</label>
                    <input type="number" name="last_price" class="form-control" placeholder="last_price" />
                  </div>
                </div>

                <div class="col-md-12 pr-1">
                  <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category_id" class="form-select mb-3" aria-label=".form-select-lg example">
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}">
                        {{$category->name}}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-12 pr-1">
                  <label for="style">Style</label>
                  <div class="form-group">
                    <select name="style_id" class="form-select mb-3" aria-label=".form-select-lg example">
                      @foreach ($styles as $style)
                      <option value="{{$style->id}}">
                        {{$style->name}}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <label for="select2Multiple">Multiple Variant</label>
                  <select class="select2-multiple form-control" name="variant_id[]" multiple="multiple" id="select2Multiple">
                    <option value="">
                      -- Select variant--
                    </option>
                    @foreach($variants as $variant)
                    <option value="{{$variant->id}}">
                      {{$variant->color_name}}
                    </option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1" name="status" />
                    <label class="custom-control-label" for="customSwitch1">Want to published?</label>
                  </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">
                  save
                </button>
                <div class="clearfix"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection