<div>
    <h3>Profile</h3>

    @if (session('user'))
        <h4>welcome, {{ session('user') }}</h4>
    @else
        <h4>No user found <a href="login">Login</a></h4>
    @endif

    <a href="logout">Logout</a>
</div>
