<?php

	require_once('model/Tblestudiantes_model.php');

	class Tblestudiantes_controller
	{
		private $model_estudiantes;

		public function __construct()
		{
			$this->model_estudiantes = new Tblestudiantes_model();
		}

		public function index()
		{
			$consulta = $this->model_estudiantes->consultar("SELECT * FROM tblestudiante");

			require_once('vista/tblestudiantes.view.php');
		}

		public function modificar()
		{
			$numero = $_REQUEST['numero'];
			$consulta = $this->model_estudiantes->consultarPorNumero("SELECT * FROM tblestudiante WHERE numero = $numero");
			require_once('vista/tblestudiantes_modificar.php');
		}

		public function guardarCambiosEstudiantes()
		{
			$dato['tipodoc'] = $_POST['txttipodoc'];
			$dato['nombre'] = $_POST['txtnombre'];
			$dato['f_nacimiento'] = $_POST['txtf_nacimiento'];
			$dato['numero'] = $_POST['txtnumero'];

			$this->model_estudiantes->actualizarEstudiantes($dato);

			$this->index();
		}

		public function eliminar()
		{
			$numero = $_REQUEST['numero'];
			$this->model_estudiantes->eliminarEstudiantes($numero);
			$this->index();
		}

		public function guardarEstudiante()
		{

			$dato['tipodoc'] = $_POST['txttipodoc'];
			$dato['nombre'] = $_POST['txtnombre'];
			$dato['f_nacimiento'] = $_POST['txtf_nacimiento'];
			$dato['numero'] = $_POST['txtnumero'];

			$this->model_estudiantes->insertarEstudiantes($dato);
			$this->index();
		}
	}

?>