<div>
    <h2>Student List</h2>
    {{-- {{print_r($students)}} --}}
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created At</th>
            <th>Action</th>
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
</div>

<style>
    th,
    td {
        margin: 8px;
        padding: 8px;
    }
</style>
