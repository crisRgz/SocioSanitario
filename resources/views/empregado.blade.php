<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todos os empregados</title>
</head>
<body>
<!-- poñer lsitado máis bonito e que solo se lle mostre ao admin, ou á propia empresa dona dos empregados -->

	@foreach ($empregados as $empregado)
		<p>
			Empregado id: {{ $empregado->idEmpo }} 
			<br>
			idUser: {{ $empregado->idUser }} - idEmpa: {{ $empregado->idEmpa}} - nif: {{ $empregado->NIFEmpo }} - nome: {{ $empregado->nomeEmpo }} {{ $empregado->apelido1Empo }} {{ $empregado->apelido2Empo }}
		</p>
	@endforeach
</body>
</html>