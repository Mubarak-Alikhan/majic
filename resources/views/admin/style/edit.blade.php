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
                                    <h3 class="card-title">Edit STYLE</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">
                                    <form action="{{ route('style.update', $style->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf @method('PUT')

                                        <div class="col-md-12">
                                            <label for="taglineInput">style</label>
                                            <input type="text" name="name" class="form-control" value="{{ old('name', $style->name) }}" placeholder="Page tilte here" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" {{  $style->status == 1 ? "checked" : ""}} name="status">
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
@endsection