@extends('admin.layout.main') @section('main')
<div id="layoutSidenav">
  @include('admin.layout.inc.side-nav')

  <div id="layoutSidenav_content">
    <div class="container-fluid">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-9">
              <h1>Create Categories</h1>
            </div>
            <div class="col-sm-3">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                  <a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="{{ route('gallery') }}">Categories</a>
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
            <h4 class="card-title">Add Galleries</h4>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('gallery.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="col-md-12 pr-1">
                <div class="form-group">
                  <select name="product_id" class="form-select mb-3" aria-label=".form-select-lg example">
                    @foreach ($products as $product)
                    <option value="{{$product->id}}">
                      {{$product->name}}
                    </option>
                    @endforeach
                  </select>

                </div>
                <div class="row col-md-12 pr-1">
                  <div class="user-image mb-3 text-center col-md-12 pr-1">
                    <div class="imgPreview"> </div>
                  </div>
                  <br><br>
                  <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Multiple files input </label>
                    <input class="form-control" name="file" type="file" id="formFileMultiple" multiple>
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
</div>
@endsection