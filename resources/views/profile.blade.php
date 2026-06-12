<div>
  <h1>profile</h1>
  <h1>{{ session('user') }}</h1>
  @if (session('user'))
  <h1>welcome, {{ session('user') }}</h1>
  @else
  <h1>No user found <a href="login">login</a> </h1>
  @endif

  <a href="logout">logout</a>


  {{ print_r(session('allData')['user']) }}
  <img src="{{ url('storage/app/private/public/{$path}') }}" alt="image">
</div>