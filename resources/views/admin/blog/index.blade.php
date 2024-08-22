@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Blogs</h3>

        <div class="d-flex justify-content-end flex-sm-nowrap flex-wrap gap-2">

            
            <a href="/admin/blogs/create" class="btn btn-primary"><i class="fas fa-add"></i></a>

            <button class="btn btn-outline d-md-none sidebarToggle">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Add your dashboard content here -->
    <div class="row">
        <div class="col-xs-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $model)
                                <tr>
                                    <td>{{$model['id']}}</td>
                                    <td>{{$model['title']}}</td>
                                    <td>
                                        <a href="/admin/blogs/{{$model['id']}}/edit" class="btn"><i
                                                class="fas fa-edit"></i></a>
                                        <button data-model-end-point="blogs" data-model-id="{{ $model->id }}"
                                            class="btn trash"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection

@section('footer')
@endsection