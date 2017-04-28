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
			<table style="width: 80%">
				<tr>
					<td class="patientTable">Salvador Orozco</td>
					<td class="patientTable">Hace 4 horas</td>
			</table>
			<div class="reviewDiv">
				Me pareci&oacute; una consulta excelente, a pesar de que el doctor lleg&oacute; tarde.
			</div>
			<br>
			<br>
			<table style="width: 80%">
				<tr>
					<td class="patientTable">Francisco Mendoza</td>
					<td class="patientTable">Hace 5 horas</td>
			</table>
			<div class="reviewDiv">
				No me gust&oacute; el trato que tuvo conmigo, ya que fue irrespetuoso y abusivo.
			</div>

		</div>

		<center><button class="button1">Iniciar sesi&oacute;n</button></center>
	</body>
</html>