<div>
    <h1>user form</h1>
    <!-- @if($errors->any())
    @foreach($errors->all() as $error)
    <div style="color: red;">
        {{ $error }}
    </div>
    @endforeach
    @endif -->
    <form action="adduser" method="POST">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user name" value="{{ old('username') }}" name="username"
                class="{{ $errors->first('username')?'input-error':'' }}">
            <span>@error('username'){{ $message }}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter email" value="{{ old('email') }}" name="email">
            <span>@error('email'){{ $message }}@enderror</span>
        </div>

        <div class="input-wrapper">
            <input type="text" placeholder="Enter password" value="{{ old('password') }}" name="password">
            <span>@error('password'){{ $message }}
                @enderror</span>
        </div>
        <div class="input-wrapper">
            <button>Add New user</button>
        </div>
    </form>
</div>

<style>
    input {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
    }

    .input-wrapper {
        margin: 10px;
    }

    button {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: aliceblue;
        cursor: pointer;
    }

    .input-error {
        border: 1px solid red;
        color: red;
    }
</style>