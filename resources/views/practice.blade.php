<h1>Blade Template</h1>

<h2>{{10 + 10}}</h2>

@if($name == "Ayush")
<h2>Hello, {{$name}}</h2>
@elseif($name == "Hari")
<h2>Hello, {{$name}}</h2>
@else
<h2>Hello, unknown</h2>
@endif


@for($i=0;$i<=10;$i++)
<h4>$i</h4>
@endfor




