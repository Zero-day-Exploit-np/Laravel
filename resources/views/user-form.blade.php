<div>
    <h1>user form</h1>
    <form action="adduser" method="POST">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user name" name="username">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter email" name="email">
        </div>

        <div class="input-wrapper">
            <input type="text" placeholder="Enter password" name="password">
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
</style>