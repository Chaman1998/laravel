<div>
    <h2>Student List</h2>
    <a href="add">Add Students</a> 
    <a href="list">Students List</a>
    {{-- {{print_r($students)}} --}}
    <br/>
    <br/>
    <form action="search" method="get">
        <input type="text" placeholder="Enter Search with Name" name="search" value="{{@$search}}" />
        <button>Search</button>
    </form>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created At</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->created_at }}</td>
                <td><a style="color: blue;text-decoration: none;" href={{ 'edit/' . $student->id }}>Edit</a></td>
                <td><a style="color: red;text-decoration: none;" href={{ 'delete/' . $student->id }}>Delete</a></td>
            </tr>
        @endforeach
    </table>
    {{$students->links()}}
</div>

<style>
    th,
    td {
        margin: 8px;
        padding: 8px;
    }
    .w-5.h-5{
        width: 20px;
    }
</style>
