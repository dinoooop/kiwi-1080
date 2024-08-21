<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom ps-3 pt-3">
        <h4><a href="{{ url('') }}">Company</a></h4>
        <button class="btn btn-outline d-md-none sidebarToggle">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <div class="position-sticky sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('admin') }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/users')}}">
                    Users
                </a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="{{ url('logout') }}">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>