@include('common.subview')
<h1>Hello this is bikram das. using laravel for the first time.</h1>


<H1>{{ $nam }}</H1>
<a href="/view">Home</a>
<a href="/about">About</a>
<a href="/contract/name">Contract</a>
<h1>{{ rand() }}</h1>

@include('common.inner',['page'=>"this is home page sub view"])
@includeIf('common.inner2',['page'=>"this is home page sub view"])