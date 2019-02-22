<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_horario extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getHorario($id){
		return $this->db->where('id_horario', $id)->get("horario");
	}

	public function listaHorario(){
		
		return $this->db->get("horario");
		
	}

	public function salvar()
	{
		$id_horario	= $this->input->post("id_horario");
		$horario	= $this->input->post("txt_horario");
		$turno	= $this->input->post("txt_turno");
		$inicio	= $this->input->post("txt_inicio");
		$fim	= $this->input->post("txt_fim");
		
		$valores = array(
			"id_horario" => $id_horario,	
			"horario" => $horario,	
			"turno"  => $turno,	
			"inicio"  => $inicio,	
			"fim"  => $fim
		);

		if(($id_horario == "") || ($id_horario == NULL )){
			$this->db->insert('horario', $valores);
		}else{

			$this->db->where('id_horario', $id_horario);
			$this->db->update('horario', $valores);
		}
		
	}

	public function excluir($id){
		return $this->db->where("id_horario", $id)->delete("horario");
	}
}
