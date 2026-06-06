<div>
    <H1>this is system page.</H1>
    <h1> {{ URL::current() }} or {{ url()->current() }}
    </h1>

    <br>
    {{ URL::full() }}


    <a href="/about">About</a>
    <br>

    {{ url()->previous() }}

    <br>
    <br>
    <a href="{{ URL::to('about') }}">About Page</a>
    <a href="{{ route('userform') }}">user login form</a>
</div>