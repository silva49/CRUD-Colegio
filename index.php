<?php  

	require_once('conexion/Conexion.php');
	require_once('controller/Tbltipodocumento_controller.php');
	require_once('controller/Tblestudiantes_controller.php');


	
	$controller_documento = new Tbltipodocumento_controller();

	if(!empty($_REQUEST['accion']))
	{
		$metodo = $_REQUEST['accion'];

		if(method_exists($controller_documento, $metodo))
		{
			$controller_documento->$metodo();
		}
		else
		{
			$controller_documento->index();
		}
	}
	else
	{
		$controller_documento->index();
	}


	$controller_estudiante = new Tblestudiantes_controller();

	if(!empty($_REQUEST['accionEstudiante']))
	{

		$metodo = $_REQUEST['accionEstudiante'];

		if(method_exists($controller_estudiante, $metodo))
		{
			$controller_estudiante->$metodo();
		}
		else
		{
			$controller_estudiante->index();
		}
	}
	else
	{
		$controller_estudiante->index();
	}

?>