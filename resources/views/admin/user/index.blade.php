@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Users</h3>

        <div class="d-flex justify-content-end flex-sm-nowrap flex-wrap gap-2">

            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fas fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="addon-wrapping">
            </div>
            <a href="/admin/users/create" class="btn btn-primary"><i class="fas fa-add"></i></a>
            
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $model)
                            <tr>
                                <td>{{$model['id']}}</td>
                                <td>{{$model['name']}}</td>
                                <td>{{$model['email']}}</td>
                                <td>
                                    <a href="/admin/users/{{$model['id']}}/edit" class="btn"><i class="fas fa-edit"></i></a>
                                    <button data-model-end-point="users" data-model-id="{{ $model->id }}" class="btn trash"><i class="fas fa-trash"></i></button>
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
<script>
    $('.sidebarToggle').on('click', function() {
        $('#sidebar').toggleClass('active');
        $('.main-content').toggleClass('active');
    });
</script>
@endsection