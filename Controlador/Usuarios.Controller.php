<?php

	/**
	 * 
	 */
	include ('./modelos/Class.Trabajadores.php');
	class Inventario
	{
		
		function __construct()
		{
			# code...
		}

		public function guardar()
		{
			$guardartrab=new Trabajadores();

			$nombre=$_POST['nombre'];
			$apellido =$_POST['apellido'];
			$tipo=$_POST['tipo'];
			$pass=$_POST['pass'];
			$fecha=$_POST['fecha'];


			$resultado=$guardar->GuardarTrabajadores($nombre,$apellido,$tipo,$pass,$fecha);

			if ($resultado)
			{
				echo "Usuario Agregado";
			}
			else
			{
				echo "Usuario no agregado";
			}
		}
	}
?>