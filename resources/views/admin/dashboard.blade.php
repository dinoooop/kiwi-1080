@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Dashboard</h3>
        <button class="btn btn-outline d-md-none sidebarToggle">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <!-- Add your dashboard content here -->
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card 1</h5>
                    <p class="card-text">Some quick example text for Card 1.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card 2</h5>
                    <p class="card-text">Some quick example text for Card 2.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card 3</h5>
                    <p class="card-text">Some quick example text for Card 3.</p>
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