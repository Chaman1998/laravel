<div>
    <h3>Update Student Page</h3>
    <form action="/edit-student/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put" />
        <input type="text" name="name" placeholder="Enter Name" value="{{$data->name}}">
        <br/><br/>
        <input type="email" name="email" placeholder="Enter Email ID" value="{{$data->email}}">
        <br/><br/>
        <input type="text" name="phone" placeholder="Enter Phone No." value="{{$data->phone}}">
        <br/><br/>
        <button>Update</button>
        <br/><br/>
        <a href="/list">Cancel</a>
    </form>
</div>
