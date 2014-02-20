<?php 
class Emple_mod extends CI_Model{

	var $id_us        = '';
	var $document_us  = '';
	var $firstName_us = '';
	var $lastName_us  = '';
	var $phone_us     = '';
	var $email_us     = '';
	var $user_us      = '';
	var $password_us  = '';
	var $state_us     = '';
	var $rol_us       = '';


	/*=================================*/
	/*listar usuarios*/
	/*=================================*/
	function lstUsers()
	{
		/*$query = $this->db->get('user');
		return $query->result();*/

		$this->db->order_by("id_us", "asc");
		$query = $this->db->get('user');
		return $query->result();
	}
	/*=================================*/
	/*adicionar usuarios*/
	/*=================================*/
	function addUser()
	{
		$this->document_us     = $this->input->post('document_us');
		$this->firstName_us    = $this->input->post('firstName_us');
		$this->lastName_us     = $this->input->post('lastName_us');
		$this->phone_us        = $this->input->post('phone_us');
		$this->email_us        = $this->input->post('email_us');
		$this->user_us         = $this->input->post('user_us');
		$this->password_us     = md5($this->input->post('password_us'));
		$this->state_us        = $this->input->post('state_us');
		$this->rol_us          = $this->input->post('rol_us');

		if (!$this->db->insert('user', $this)) {
			echo "<script>";
			echo 'window.location.replace("'.base_url().'");';
			echo "alert('error');";
			echo "</script>";
		}
		else{
			echo "<script>";
			echo 'window.location.replace("'.base_url().'");';
			echo "alert('usuario adicionado con exito');";
			echo "</script>";
		}
	}
	/*=================================*/
	/*ver usuarios*/
	/*=================================*/
	function lst($id){
		$this->id_us = $id;
		$query = $this->db->get_where('user',array('id_us' => $this->id_us));
		return $query->result();
	}

	/*=================================*/
	/*modificar usuarios*/
	/*=================================*/
	function modUser($id)
	{
		$this->document_us     = $this->input->post('document_us');
		$this->firstName_us    = $this->input->post('firstName_us');
		$this->lastName_us     = $this->input->post('lastName_us');
		$this->phone_us        = $this->input->post('phone_us');
		$this->email_us        = $this->input->post('email_us');
		$this->user_us         = $this->input->post('user_us');
		$this->password_us     = $this->input->post('password_us');
		$this->state_us        = $this->input->post('state_us');
		$this->rol_us          = $this->input->post('rol_us');

		$this->db->where('id_us', $id);
		if (!$this->db->update('user', $this)) {
			echo "<script>";
			echo 'window.location.replace("'.base_url().'");';
			echo "alert('error');";
			echo "</script>";
		}
		else{
			echo "<script>";
			echo 'window.location.replace("'.base_url().'");';
			echo "alert('usuario modificado con exito');";
			echo "</script>";
		}
	}

	/*=================================*/
	/*Eliminar*/
	/*=================================*/
	function eliUser($id)
	{

		$this->db->where('id_us', $id);
		if (!$this->db->delete('user')) {
			echo "<script>";
			echo "alert('Problemas al eliminar el usuario');";
			echo "</script>";
		}
		else{
			echo "<script>";
			echo "alert('Usuario eliminado con exito');";
			echo 'window.location.replace("'.base_url().'");';	
			echo "</script>";
		}
	}

	/*=================================*/
	/*inhabilitar*/
	/*=================================*/
	function udpinab($id)
	{
		$this->state_us = 'Inactivo';

		$this->db->where('id_us', $id);
		if ($this->db->update('user', array('state_us'=> $this->state_us))) 
		{
			echo "<script>";
			echo 'window.location.replace("'.base_url().'");';	
			echo "</script>";
		}
	}

	/*=================================*/
	/*habilitar*/
	/*=================================*/
	function udphabi($id)
	{
		$this->state_us = 'Activo';

		$this->db->where('id_us', $id);
		if ($this->db->update('user', array('state_us'=> $this->state_us))) 
		{
			echo "<script>";
			echo 'window.location.replace("'.base_url().'");';	
			echo "</script>";
		}
	}

	/*=================================*/
	/*Validar Administrador*/
	/*=================================*/
	public function validateUser()
	{
		$this->user_us     = $this->input->post('user_us');
		$this->password_us = md5($this->input->post('password_us'));
		$this->state_us    = 'Activo';
		$this->rol_us      = 'Empleado';

		$this->db->select('*');
		$this->db->where('user_us', $this->user_us);
		$this->db->where('password_us', $this->password_us);
		$this->db->where('state_us', $this->state_us);
		$this->db->where('rol_us', $this->rol_us);
		$this->db->limit(1);
		$this->db->from('user');

		$query = $this->db->get();

		foreach ($query->result() as $row) 
		{
			$this->session->set_userdata(array('idUser' => $row->document_us, 
											   'name'   => $row->firstName_us,
											   'rol'    => $row->rol_us,
											   'estado' => $row->state_us));
		}	
		if ($query->num_rows() > 0) 
		{
			if ($this->session->userdata('rol') == 'Administrador'&& $this->session->userdata('estado') == 'Activo') 
			{
				redirect('admin', 'refresh');
			}
			if ($this->session->userdata('rol') == 'Empleado' && $this->session->userdata('estado') == 'Activo') 
			{
				redirect('empleado', 'refresh');
			}
			if ($this->session->userdata('rol') == 'Diseñador' && $this->session->userdata('estado') == 'Activo') 
			{
				redirect('disenador', 'refresh');
			}
			if ($this->session->userdata('rol') == 'Usuario' && $this->session->userdata('estado') == 'Activo') 
			{
				redirect('user', 'refresh');
			}
		}
		else
		{
			echo "<script>";
			echo "alert('Usuario o Contraseña incorrectas o esta Inactivo');";
			echo 'window.location.replace("'.base_url().'");';
			echo "</script>";
		}
	}
}