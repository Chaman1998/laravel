<div>
    <h3>Home page</h3>
    <a href="about">About Page</a>
    <p>Another way to create a tag.</p>
    <a href="{{URL::to('about')}}">About Page</a>
    <h5>{{ URL::current() }}</h5>
    <h5>{{ URL()->current() }}</h5>

    <h5>{{ URL::full() }}</h5>



    <!-- An unexamined life is not worth living. - Socrates -->
</div>
