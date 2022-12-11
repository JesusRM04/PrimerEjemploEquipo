<?php 
	function conexion(){
		return mysqli_connect('localhost:33065',
								'root',
								'',
								'tienda');
	}
?>