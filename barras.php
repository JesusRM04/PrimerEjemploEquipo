<?php
require_once "conexion.php";
$conexion=conexion();
$sql="SELECT id,Precio,Nombre
from productos order by id";
$result=mysqli_query($conexion,$sql);
	$valoresY=array();//montos
	$valoresX=array();//fechas
	$valoresZ=array();//nombres

	while ($ver=mysqli_fetch_row($result)) {
		$valoresY[]=$ver[1];
		$valoresX[]=$ver[0];
		$valoresZ[]=$ver[2];
	}

	$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);
	$datosZ=json_encode($valoresZ);
	?>

	<div id="graficaBarras"></div>

	<script type="text/javascript">
		function crearCadenaBarras(json){
			var parsed = JSON.parse(json);
			var arr = [];
			for(var x in parsed){
				arr.push(parsed[x]);
			}
			return arr;
		}
	</script>

	<script type="text/javascript">

		datosX=crearCadenaBarras('<?php echo $datosX ?>');
		datosY=crearCadenaBarras('<?php echo $datosY ?>');
		datosZ=crearCadenaBarras('<?php echo $datosZ ?>');

		var data = [
		{
			x: datosX,
			y: datosY,
			text: datosZ.map(String),
			textposition: 'auto',
			marker: {
				color: 'black'
			},
			type: 'bar'
		}
		];

		var layout = {
			title: 'GRAFICA DE BARRAS',
			xaxis: {
				title: 'Productos'
			},
			yaxis: {
				title: 'Precio'
			}
			
		};

		Plotly.newPlot('graficaBarras', data, layout);
	</script>