<?php
require_once "conexion.php"; 
$conexion=conexion();
$sql="SELECT id,Precio 
from productos order by id";
$result=mysqli_query($conexion,$sql);
	$valoresY=array();//montos
	$valoresX=array();//fechas

	while ($ver=mysqli_fetch_row($result)) {
		$valoresY[]=$ver[1];
		$valoresX[]=$ver[0];
	}

	$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);

	?>
	<div id="graficaLineal"></div>

	<script type="text/javascript">
		function crearCadenaLineal(json){
			var parsed = JSON.parse(json);
			var arr = [];
			for(var x in parsed){
				arr.push(parsed[x]);
			}
			return arr;
		}
	</script>


	<script type="text/javascript">

		datosX=crearCadenaLineal('<?php echo $datosX ?>');
		datosY=crearCadenaLineal('<?php echo $datosY ?>');

		var trace1 = {
			x: datosX,
			y: datosY,
			type: 'scatter',
			line: {
				color: 'black',
				width: 2
			},
			marker: {
				color: 'black',
				size: 10
			}
		}
		var layout = {
			title: 'GRAFICA LINEAL',
			xaxis: {
				title: 'Productos'
			},
			yaxis: {
				title: 'Precio'
			}
			
		};

		var data = [trace1];

		Plotly.newPlot('graficaLineal', data, layout);
	</script>