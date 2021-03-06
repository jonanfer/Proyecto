<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Disenador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dise_mod');

		if ($this->session->userdata('rol') != 'Diseñador') {
			redirect('/', 'refresh');	
		}
		$this->removeCache();
	}

	/*===========================================*/
	/*Function views users*/
	/*===========================================*/
	public function index()
	{

		$data['lu'] = $this->dise_mod->lstUsers();
		$this->load->view('disenador/index', $data);
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

			$this->form_validation->set_rules('document_us', 'Documento', 'required|is_numeric|is_unique[user.document_us]');
			$this->form_validation->set_rules('firstName_us', 'Nombre', 'required');
			$this->form_validation->set_rules('lastName_us', 'Apellidos', 'required');
			$this->form_validation->set_rules('phone_us', 'Telefono', 'required|is_numeric');
			$this->form_validation->set_rules('email_us', 'Correo Electronico', 'required|valid_email|is_unique[user.email_us]');
			$this->form_validation->set_rules('user_us', 'Usuario', 'required|is_unique[user.user_us]');
			$this->form_validation->set_rules('password_us', 'Contraseña', 'required');
			$this->form_validation->set_rules('rol_us', 'Rol', 'required');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			if ($this->form_validation->run() == true ) 
			{
				$this->dise_mod->addUser();
			}
		}
		$this->load->view('disenador/add');
	}

	/*===========================================*/
	/*Function view user*/
	/*===========================================*/
	public function lst($id)
	{
		$data['lu'] = $this->dise_mod->lst($id);
		$this->load->view('disenador/view', $data);
	}

	/*===========================================*/
	/*Function update user*/
	/*===========================================*/
	public function upd($id)
	{
		$data['lu'] = $this->dise_mod->lst($id);
		$this->load->view('disenador/update', $data);

		if ($_POST){
			$this->dise_mod->modUser($id);
		}
	}

	/*===========================================*/
	/*Function delete user*/
	/*===========================================*/
	public function del($id)
	{
		$this->dise_mod->eliUser($id);
	}

	/*===========================================*/
	/*Function habilitar user*/
	/*===========================================*/
	public function updhab($id)
	{
		$this->dise_mod->udphabi($id);
	}

	/*===========================================*/
	/*Function inhabilitar user*/
	/*===========================================*/
	public function updina($id)
	{
		$this->dise_mod->udpinab($id);
	}
}
