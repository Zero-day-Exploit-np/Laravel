<div>
    {{ session('message') }}
    {{ session()->reflash() }}
    <form action="login" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="user" placeholder="Enter name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter password">
        <br>
        <br>
        <input type="file" name="file" id="">
        <button>login</button>
    </form>
</div>