@extends('admin.layout.main') @section('main')
<div id="layoutSidenav">
  @include('admin.layout.inc.side-nav')

  <div id="layoutSidenav_content">
    <div class="container">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Set List</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                  <a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="{{ route('set.add') }}">Add-Sets</a>
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
            <td>Set</td>
            <td>Slug</td>
            <td>status</td>
            <td>view</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
        </thead>
        <tbody>
          Total Categories:-{{ $sets->total() }}

          @foreach ($sets as $set)
          <tr>
            <th scope="row">{{ $set->id }}</th>
            <td>{{ $set->name }}</td>
            <td>{{ $set->slug }}</td>
            <td>
              @if ($set->status == 1)
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
              <a class="btn btn-primary" href="{{ route('set.edit', $set->id)}}">EDIT</a>
            </td>
            <td>
              <!-- <form action="{{route('set.destory', $set->id)}}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                                <button id="btnDelete" class="btn btn-danger btn-sm">Delete</button>
                            </form> -->
              <form method="POST" action="{{route('set.destory', $set->id)}}">
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
              {{ $sets->links() }}
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@endsection