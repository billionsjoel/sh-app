<hr>
<div class="sidebar-heading">ScribeHouse</div>
<hr>
<div class="list-group list-group-flush">
    <a class="list-group-item list-group-item-action bg-light" href="{{ url('home') }}"><i
            class="fa fa-tachometer-alt"></i> &nbsp; Dashboard</a>
    <a class="list-group-item list-group-item-action bg-light" href="{{ url('create-article') }}"><i
            class="fa fa-blog"></i> &nbsp; Blog</a>
    <a class="list-group-item list-group-item-action bg-light" href="{{ url('view-subscriptions') }}"><i
            class="fa fa-mail-bulk"></i> &nbsp;Email List</a>
    <a class="list-group-item list-group-item-action bg-light" href="{{ url('create-book-cover') }}"><i
            class="fa fa-box-open"></i> &nbsp;Book Cover</a>
    <a class="list-group-item list-group-item-action bg-light" href="{{ url('create-testimonial') }}"><i
            class="fa fa-bullhorn"></i> &nbsp;Testimonial</a>
    <a class="list-group-item list-group-item-action bg-light" href="{{ url('view-messages') }}"><i
            class="fa fa-envelope"></i> &nbsp;Messages</a>
    <a class="list-group-item list-group-item-action bg-light" href="{{ url('view-comments') }}"><i
            class="fa fa-comment"></i> &nbsp;Comments</a>
    <a class="list-group-item list-group-item-action bg-light" href="#!"><i class="fa fa-user"></i> &nbsp; Add User
        Account
    </a>
    <li class="list-group-item list-group-item-action bg-light mt-4">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-warning btn-block" type="submit" href="#!"> Log
                Out <i class="fa fa-power-off"></i></button>
        </form>
    </li>
</div>
