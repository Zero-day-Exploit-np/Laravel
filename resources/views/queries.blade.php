<div>
    <h1>this is queries page.</h1>
    {{ print_r($users) }}

    <table border="2px">
        <tr>
            <td>Name</td>
            <td>email</td>
            <td>phone</td>
        </tr>
        @foreach ($users as $user )
        <tr>
            <td>{{ $user->Name }}</td>
            <td>{{ $user->Email }}</td>
            <td>{{ $user->Phone }}</td>

        </tr>

        @endforeach
    </table>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>