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
                  <h3 class="card-title">Edit Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                  <form action="{{ route('product.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="row">
                      <div class="col-md-12 pr-1">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" value="{{ old('name', $products->name) }}" class="form-control" placeholder="name here" />
                        </div>
                      </div>
                      <div class="col-md-12 pr-1">
                        <div class="form-group">
                          <label>Description</label>
                          <input type="text" name="description" value="{{ old('name', $products->description) }}" class="form-control" placeholder="name here" />
                        </div>
                      </div>
                      <div class="col-md-12 pr-1">
                        <div class="form-group">
                          <label>Material</label>
                          <input type="text" name="material" value="{{ old('name', $products->material) }}" class="form-control" placeholder="name here" />
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="taglineInput">selling_price</label>
                          <input type="number" value="{{ old('name', $products->selling_price) }}" name="selling_price" class="form-control" placeholder="selling_price" />
                        </div>
                        <div class="form-group col-md-6">
                          <label for="taglineInput">Last_price</label>
                          <input type="number" value="{{ old('name', $products->last_price) }}" name=" last_price" class="form-control" placeholder="last_price" />
                        </div>
                      </div>

                      <div class="col-md-12 pr-1">
                        <div class="form-group">
                          <label for="category">Category</label>
                          <select name="category_id" class="form-select mb-3" aria-label=".form-select-lg example">
                            @foreach ($categories as
                            $category)
                            <option value=" {{$category->id}}">
                              {{$category->name}}
                            </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12 pr-1">
                        <div class="form-group">
                          <label for="style">Styles</label>
                          <select name="style_id" class="form-select mb-3" aria-label=".form-select-lg example">
                            @foreach ($styles as
                            $style)
                            <option value="{{$style->id}}">
                              {{$style->name}}
                            </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12 pr-1">
                        <div class="form-group">
                          <label for="variants"> Variant</label>
                          <select name="variant_id" class="form-select mb-3" aria-label=".form-select-lg example">
                            @foreach ($variants as
                            $variant)
                            <option value="{{$variant->id}}">
                              {{$variant->color_name}}
                            </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12 pr-1">
                        <div class="form-group">
                          <label for="collection">Collection</label>
                          <select name="collection_id" class="form-select mb-3" aria-label=".form-select-lg example">
                            @foreach ($collections
                            as $collection)
                            <option value="{{$collection->id}}">
                              {{$collection->name}}
                            </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12 pr-1">
                        <div class="form-group">
                          <label for="set">Sets</label>
                          <select name="set_id" class="form-select mb-3" aria-label=".form-select-lg example" value=" >
                            @foreach ($sets as $set)
                            <option value=" {{$set->id}}">
                            {{$set->name}}
                            </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group col-md-12">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="customSwitch1" {{$products->status == 1 ? "checked" : ""}} name="status">
                          <label class="custom-control-label" for="customSwitch1">Want to
                            published?</label>
                        </div><br>
                      </div>

                      <button type="submit" class="btn btn-info btn-fill pull-right">
                        save
                      </button>
                      <div class="clearfix"></div>
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