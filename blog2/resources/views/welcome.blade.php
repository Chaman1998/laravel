<div>
    <h3>Welcome Page</h3>
   
    <a href="{{URL::to('home')}}">Home Page</a>
    <a href="{{URL::to('about')}}">About Page</a>
    <a href="{{URL::to('about',['name'])}}">About Name</a>

    <h5>{{ URL::current() }}</h5>
    <h5>{{ URL()->current() }}</h5>

    <h5>{{ URL::full() }}</h5>



    <!-- An unexamined life is not worth living. - Socrates -->
</div>
