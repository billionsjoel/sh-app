<hr>
<div class="sidebar-heading">ScribeHouse</div>
<hr>
<div class="list-group list-group-flush">
    <a class="list-group-item list-group-item-action bg-light" href="{{url('home')}}">Dashboard</a>
    <a class="list-group-item list-group-item-action bg-light mt-4" href="{{ url('create-article') }}">Blog</a>
    <a class="list-group-item list-group-item-action bg-light" href="{{ url('view-subscriptions') }}">Email List</a>
    <a class="list-group-item list-group-item-action bg-light" href="{{ url('create-book-cover') }}">Book Cover</a>
    <a class="list-group-item list-group-item-action bg-light" href="{{ url('create-testimonial') }}">Testimonial</a>
    <a class="list-group-item list-group-item-action bg-light" href="{{ url('view-messages') }}">Messages</a>
    <a class="list-group-item list-group-item-action bg-light" href="#!">Add User Account</a>
    <li class="list-group-item list-group-item-action bg-light mt-4">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="dropdown-item" type="submit" href="#!">Log Out</button>
        </form>
    </li>
</div>