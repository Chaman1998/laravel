<div>
    <h3>Users list</h3>
    {{-- {{ print_r($users) }} --}}
    <table style="border: 1px;">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
            </tr>
        @endforeach
    </table>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
