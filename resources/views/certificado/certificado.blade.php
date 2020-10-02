<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.fuente-calibri{
			font-family: 'calibri';
		}

		.firma{
			display: block;
		  	position: relative;
		  	right: -862px;
		}

		.aclaracion{
			  display: block;
			  position: absolute;
			  bottom: -47px;
			  right: 187px;
			  font-size: 20px;
		}

		.datos-firma{
			  display: block;
			  position: absolute;
			  bottom: -81px;
			  right: 187px;
			  font-size: 20px;
		}

		.contorno{
			border-color: #00B050;
			border-width:4px;
			border-style:solid;
			background-image: url({{asset('img/fondo-certificado.png')}});
			background-repeat: no-repeat;
			background-color: #ffffff;
			background-position: center;
			padding: 25px;
		}

		.linea-firma{
			color: #00B050 !important;
			border:15px!important;
		}

	</style>

</head>
<body>
	<div class="container">
		<div class="contorno">
			<div class="row">
				<div class="col-md-7">
					<p class="text-right fuente-calibri" style="padding-top: 56px; color: #00B050; font-size: 24px;">EDUCACIÓN ALIMENTARIA</p>
				</div>
				<div class="col-md-5">
					<img src="{{asset('img/logo-certificado.png')}}">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="text-center" style="font-family: 'Californian FB'; font-size: 51px;"><u><b>CONSTANCIA DE APROBACIÓN</b></u></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center fuente-calibri">DEJAMOS CONSTANCIA QUE:</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center fuente-calibri"><b>{{$Nombre}} APELLIDO, DNI XXXXXXXX</b></h2>
				</div>
			</div>
			<div class="row">
				<p class="fuente-calibri" style="font-size: 20px; padding: 30px;">Ha aprobado el examen del <i><u><b>curso de manipulación de alimentos</b></u></i> en fecha: <i><u><b>DIA / MES / AÑO</b></u></i>, bajo modalidad virtual dictado por la de entidad capacitadora nº433, bajo disposición provincial nº DISPO-2020-64-GDEBA-DPFAAYRNMDAGP. Dicha constancia es de carácter provisorio, hasta contar con el certificado oficial avalado por el Ministerio de Desarrollo Agrario de la Provincia de Buenos Aires.</p>
			</div>
			<div class="row">
				<img src="{{asset('img/firma.png')}}" class="firma">
				<p class="aclaracion">Lic. Al. Matias Cortez</p>
				<hr>
				<p class="datos-firma">MN: 299 CPQ: 9492</p>
				<hr class="linea-firma">
			</div>
		</div>
	</div>
</body>
</html>