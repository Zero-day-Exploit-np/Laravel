<h1>{{ $nam }}</h1>

@if ($nam=='ram')
<H1>name is {{ $nam }}</H1>
@else
<h1>Another person</h1>
@endif
<h1>info page</h1>

<div>
    @for ($i=0; $i<6; $i++)

        <h1>{{ $nam[$i] }}</h1>

        @endfor
</div>

<div>
    @foreach ($collages as $collage)
    <h1>{{ $collage }}</h1>

    @endforeach
</div>