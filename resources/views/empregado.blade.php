<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todos los empregados</title>
</head>
<body>

	@foreach ($empregados as $empregado)
		<p>
			{{ $empregado->nome }}, nif: {{ $empregado->NIF }}
			<br>
			idUser: {{ $empregado->idUser }}
		</p>
	@endforeach
</body>
</html>