<?php
	/**
	 * 
	 */

	include('Class.Conexion.php');

	class Trabajadores
	{
		
		function __construct()
		{
			# code...
		}

		public function GuardarTrabajadores($nombre,$apellido,$tipo,$pass,$fecha)
		{
			$trab=new Conexion();
			$query="INSERT INTO `usuarios`(`Nombre`, `Apellido`, `Tipo`, `Password`, `FechaNac`) VALUES ('$nombre','$apellido','$tipo','$pass','$fecha')";
			$producto=$trab->query($query);
			$trab ->close();
			return $producto;
		}
	}
?>