@extends('admin.layout.main') @section('main')
<div id="layoutSidenav">
  @include('admin.layout.inc.side-nav')
  <div id="layoutSidenav_content">
    <div class="container-fluid">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Add ROLES</h4>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('role.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" step="0000.10" name="title" value="" class="form-control" placeholder="" />
                </div>
              </div>

              <button type="submit" class="btn btn-info btn-fill pull-right">
                save
              </button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection