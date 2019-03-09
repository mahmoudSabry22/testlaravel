<!DOCTYPE html>
<html>
<head>
	<title>main page</title>
</head>
<body>
	@foreach($pro as $p)
		<li>
			<a href="/projects/{{ $p->title }}">
				{{ $p->title }}
			</a>
		</li>
	@endforeach
</body>
</html>


