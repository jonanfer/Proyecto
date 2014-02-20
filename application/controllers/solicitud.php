<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitud extends CI_Controller {

	//var $ruta = '';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('solicitud_mod');
		$this->removeCache();
		//$this->ruta = base_url().'user';
	}

	/*===========================================*/
	/*Function iniciar session*/
	/*===========================================*/
	public function index()
	{
		$data['lu'] = $this->solicitud_mod->lstSol();
		$this->load->view('user/solicitud', $data);
    }
	/*===========================================*/
	/*Function Add*/
	/*===========================================*/
	public function add()
	{
		if ($_POST){

			$this->form_validation->set_message('required', '%s Requerido');
			$this->form_validation->set_message('is_numeric', '%s debe ser números');
			$this->form_validation->set_message('valid_email', '%s debe ser valido');
			$this->form_validation->set_message('is_unique', '%s no esta disponible');

			$this->form_validation->set_rules('id_soliditud', 'Codigo', 'required|is_numeric|is_unique[solicitudes.cod_soliditud]');
			$this->form_validation->set_rules('usuario_id', 'Usuario', 'required');
			$this->form_validation->set_rules('tip_solicitud', 'Tipo de Solicitud', 'required');
			$this->form_validation->set_rules('fecha_solicitud', 'Fecha de Solicitud', 'required');
			$this->form_validation->set_rules('ima_solicitud', 'Imagen', 'required');
			$this->form_validation->set_rules('des_solicitud', 'Descripción', 'required');
			$this->form_validation->set_rules('est_solicitud', 'Estado de Solicitud', 'required');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			if ($this->form_validation->run() == true ) 
			{
				$this->solicitud_mod->addSolicitud();
			}
		}
		$this->load->view('user/addSolicitud');
	}

}
