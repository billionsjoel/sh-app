<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom mt-4">
    <button class="btn btn-primary" id="menu-toggle">Menu</button>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#!">

                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#!"> </a></li>
            <li class="nav-item dropdown mr-4">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#!" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Profile</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#!">Change Password</a>
                    <a class="dropdown-item" href="#!">Add User</a>
                    <div class="dropdown-divider"></div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit" href="#!">Log Out</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>