<?php 
class Solicitud_mod extends CI_Model{

	var $cod_solicitud    = '';
	var $usuario_id       = '';
	var $tip_solicitud    = '';
	var $fecha_solicitud  = '';
	var $ima_solicitud    = '';
	var $des_solicitud    = '';
	var $est_solicitud    = '';


	function lstSol()
	{
		/*$query = $this->db->get('user');
		return $query->result();*/

		$this->db->order_by("id_solicitud", "asc");
		$query = $this->db->get('solicitudes');
		return $query->result();
	}


	public function addSolicitud()
	{
		$this->cod_solicitud   = $this->input->post('id_solicitud');
		$this->usuario_id      = $this->input->post('usuario_id');
		$this->tip_solicitud   = $this->input->post('tip_solicitud');
		$this->fecha_solicitud = $this->input->post('fecha_solicitud');
		$this->ima_solicitud   = $this->input->post('ima_solicitud');
		$this->des_solicitud   = $this->input->post('des_solicitud');
		$this->est_solicitud   = $this->input->post('est_solicitud');

		if (!$this->db->insert('solicitudes', $this)) {
			echo "<script>";
			echo 'window.location.replace("'.base_url().'");';
			echo "alert('error');";
			echo "</script>";
		}
		else{
			echo "<script>";
			echo 'window.location.replace("'.base_url().'");';
			echo "alert('Solicitud enviada con exito');";
			echo "</script>";
		}
	}
}


