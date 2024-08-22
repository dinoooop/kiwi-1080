@extends('layouts.admin')
@section('title', 'Create Blog')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Create Blog</h3>
    </div>

    <div class="row">
        <div class="col-xs-12 mb-3">
            <div class="card">
                <div class="card-body">

                    <form action="/admin/blogs" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Blog Content</label>
                            <textarea class="form-control" name="content" id="content" rows="3" required></textarea>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            <a class="btn btn-light mb-3" href="/admin/blogs">Cancel</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
</main>

@endsection

@section('footer')

@endsection