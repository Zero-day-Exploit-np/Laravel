@include('common.subview')
<h1>Choose Your language</h1>
<a href="/setlang/en">English</a>
<br />
<a href="/setlang/hi">Hindi</a>
<br />
<a href="/setlang/np">nepali</a>


<h1>{{__('welcome.heading') }}</h1>

<H1>{{ $nam }}</H1>
<a href="/view">{{__('welcome.view') }}</a>
<a href="/about">{{__('welcome.about') }}</a>
<a href="/contract/name">{{__('welcome.contact') }}</a>
<a href="/system">{{__('welcome.system') }}</a>
<h1>{{ rand() }}</h1>

@include('common.inner',['page'=>"this is home page sub view"])
@includeIf('common.inner2',['page'=>"this is home page sub view"])


<h1>{{__('welcome.name',["value"=>"Bikram kumar das"])}}</h1>