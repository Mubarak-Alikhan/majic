@extends('admin.layout.main') @section('main')
<div id="layoutSidenav">
  @include('admin.layout.inc.side-nav')

  <div id="layoutSidenav_content">
    <div class="container-fluid">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-9">
              <h1>Create Styles</h1>
            </div>
            <div class="col-sm-3">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                  <a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="{{ route('style') }}">Style</a>
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
            <h4 class="card-title">Add Styles</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('style.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="row">

                <div class="col-md-12 pr-1">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="" class="form-control" placeholder="name here" />
                  </div>
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