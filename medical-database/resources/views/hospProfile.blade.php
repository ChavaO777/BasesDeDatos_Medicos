<html>

	<head>
		<title>B&uacute;squeda hospital</title>
		<link rel="stylesheet" href="/css/hospStyles.css">
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
					$address = App\Address::where('id', {{ $hospital->address_id}})->first();
					<td class="infoTable">{{ $address->street }}</td>
				</tr>
			</table>

			<br>
			<br>
			<br>
			<br>
			<h2>Doctores</h2>
			<button class="docProfile">Ulises Castro</button>
			<button class="docProfile">Carmen Jimenez</button>
			<button class="docProfile">Ra&uacute;l P&eacute;rez</button>
			<button class="docProfile">Paulina G&oacute;nzales</button>
			<button class="docProfile">Pedro de J&eacute;sus &Aacute;lvarez</button>

		</div>

		<center><button class="button1">Iniciar sesi&oacute;n</button></center>
	</body>
</html>