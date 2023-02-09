@extends('admin.layout.main') @section('main')
<div id="layoutSidenav">
  @include('admin.layout.inc.side-nav')

  <div id="layoutSidenav_content">
    <div class="container">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Variants List</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                  <a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="{{ route('variant.add') }}">Add-Variants</a>
                </li>
                <li class="breadcrumb-item active">Add</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>
      <table class="table">
        <thead>
          <tr>
            <td>ID</td>
            <td>Variant</td>
            <td>Slug</td>
            <td>status</td>
            <td>view</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
        </thead>
        <tbody>
          Total Variants:-{{ $variants->total() }}

          @foreach ($variants as $variant)
          <tr>
            <th scope="row">{{ $variant->id }}</th>
            <td>
              <div class="col-md-12">
                <div style="height: 25px; width: 50px; border-radius: 5px; background-color:{{ "#".$variant->color_name }};"></div>
              </div>
            </td>
            <td>{{ $variant->slug }}</td>
            <td>
              @if ($variant->status == 1)
              <span class="badge bg-success">{{
                                __("Active")
                            }}</span>
              @else
              <span class="badge bg-danger">{{
                                __("Deactive")
                            }}</span>
              @endif
            </td>
            <td><a class="btn btn-info" href="">view</a></td>
            <td>
              <a class="btn btn-primary" href="{{ route('variant.edit', $variant->id)}}">EDIT</a>
            </td>
            <td>
              <!-- <form action="{{route('variant.destory', $variant->id)}}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                                <button id="btnDelete" class="btn btn-danger btn-sm">Delete</button>
                            </form> -->
              <form method="POST" action="{{route('variant.destory', $variant->id)}}">
                @csrf
                <input name="_method" type="hidden" value="DELETE" />
                <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title="Delete">
                  Delete
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="col-12">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item pagination_custom">
              {{ $variants->links() }}
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@endsection