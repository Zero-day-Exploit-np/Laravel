<div>
    <h1>student page</h1>

    {{ $data }}


    <table border="2ppx">
        <tr>
            <td>Name</td>
            <td>Batch</td>
            <td>Email</td>

        </tr>
        @foreach ($data as $student)
        <tr>
            <td>{{ $student->Name }}</td>
            <td>{{ $student->Batch }}</td>
            <td>{{ $student->Email }}</td>

        </tr>

        @endforeach
    </table>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
</div>