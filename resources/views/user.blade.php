<h1>user list</h1>
{{ print_r($users)
 }}

<table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->ID}}</td>
        <td>{{ $user->Name }}</td>
        <td>{{ $user->Email }}</td>
        <td>{{ $user->Phone }}</td>

    </tr>
    @endforeach
</table>