@extends('admin.layout.main') @section('main')
<div id="layoutSidenav">
    @include('admin.layout.inc.side-nav')

    <div id="layoutSidenav_content">
        <div class="container">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Categories List</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('category.add') }}">Add-Categories</a>
                                </li>
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <table class="table">
                @include('admin.table.head', ['collection' => collect(['ID', 'Name', 'Slug', 'Status', ''])])
                @include('admin.table.body', ['elements' => $categories])
            </table>

            <div class="col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item pagination_custom">
                            {{ $categories->links() }}
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection