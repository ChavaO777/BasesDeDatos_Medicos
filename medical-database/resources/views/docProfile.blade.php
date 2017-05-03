<html>

	<head>
		<title>B&uacute;squeda de doctor</title>
		<link rel="stylesheet" href="/css/docStyles.css">
		
		<!-- Title font -->
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		
		<!-- Subtitles font -->
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	</head>

	<body>
		<br>
		<div class="titleBox">
			<br>
			<h1>Dr(a). {{ $doctor->first_name }} {{ $doctor->last_name }}</h1>
			<center><img src="estrellas.png" width="250"></center>
			<br>
			<br>
		</div>

		<div class="boxed">
			<br>
			<table style="width:50%">
				<tr>
					<td class="titleTable">Nombre</td>
					<td class="infoTable">{{ $doctor->first_name }}</td>
				</tr>
				<tr>
					<td class="titleTable">Apellido</td>
					<td class="infoTable">{{ $doctor->last_name }}</td>
				</tr>
				<tr>
					<td class="titleTable">C&eacute;dula profesional</td>
					<td class="infoTable">{{ $doctor->medical_id }}</td>
				</tr>
				<tr>
					<td class="titleTable">Especialidad</td>
					<td class="infoTable">{{ $specialty->name }}</td>
				</tr>
				<tr>
					<td class="titleTable">Costo por consulta</td>
					<td class="infoTable">${{ $doctor->consultation_cost }}</td>
				</tr>
			</table>

			<br>
			<br>
			<br>
			<br>
			<h2>Rese&ntilde;as</h2>

			@forelse($total_doctor_reviews as $review)

					<table style="width: 85%">
					<tr>
						<td class="patientTable">Paciente: {{ $review->first_name }} {{ $review->last_name }}</td>
						<td class="patientTable">Fecha: {{ $review->date }}</td>
						<td class="patientTable">Calificación: {{ $review->rating }}</td>
					</table>

					<div class="reviewDiv">
						{{ $review->text }}
					</div>

			@empty
				<p><h3><center>Este doctor no tiene reseñas.</center></h3></p>

			@endforelse
		</div>

		<center><button class="button1">Iniciar sesi&oacute;n</button></center>
	</body>
</html>