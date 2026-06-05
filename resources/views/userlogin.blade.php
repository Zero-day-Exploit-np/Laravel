<div>
    <h1>Add New user by user-login</h1>
    <form action="login-form" method="POST">
        @csrf
        <div>
            <h5>User skill</h5>
            <input type="checkbox" id="PHP" name="skill[]" value="PHP">
            <label for="PHP">PHP</label>
            <input type="checkbox" id="Node" name="skill[]" value="Node">
            <label for="Node">Node</label>
            <input type="checkbox" id="JS" name="skill[]" value="JS">
            <label for="JS">JS</label>
        </div>
        <div>
            <h5>Gender</h5>
            <input type="radio" id="male" name="gender" value="male">
            <label for="Male">male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">female</label>
        </div>
        <div>
            <h5>city</h5>
            <select name="city">
                <option value="damak">Damak</option>
                <option value="Bt">bt</option>
                <option value="KTM">KTM</option>
            </select>
        </div>

        <div>
            <H5>Age</H5>
        </div>
        <div>
            <input type="range" name="age" min="18" max="100">

        </div>
        <button>Add new user</button>
    </form>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
</div>