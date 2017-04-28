<html>

	<head>
		<title>B&uacute;squeda hospital</title>
		<link rel="stylesheet" href="/css/hospStyles.css">

		<!-- Title font -->
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		
		<!-- Subtitles font -->
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	</head>

	<body>
		<br>
		<div class="titleBox">
			<br>
			<h1>{{ $hospital->name }}</h1>
			<br>
			<br>
		</div>

		<div class="boxed">
			<br>
			<table style="width:50%">
				<tr>
					<td class="titleTable">Nombre</td>
					<td class="infoTable">{{ $hospital->name }}</td>
				</tr>
				<tr>
					<td class="titleTable">Ubicaci&oacute;n</td>
					<td class="infoTable">Calle {{ $address->street}} #{{ $address->number}} Col. {{ $address->suburb}}</td>
				</tr>

			</table>

			<br>
			<br>
			<br>
			<br>
			<h2>Doctores</h2>

			@foreach($total_doctors as $doctor)

			<button class="docProfile"> Dr(a). {{ $doctor->first_name }} {{ $doctor->last_name }}  </button>
			@endforeach

		</div>

		<center><button class="button1">Iniciar sesi&oacute;n</button></center>
	</body>
</html>