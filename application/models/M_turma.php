<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_turma extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getTurma($id){
		return $this->db->where('id_turma', $id)->get("turma");
	}

	public function listaTurma(){
		//$this->db->select("turma.*, serie.serie, sala.sala");
		$this->db->select("*");
		$this->db->from("turma");
		//$this->db->join("serie", "serie.id_serie = turma.id_serie");
		//$this->db->join("sala", "sala.id_sala = turma.id_sala");
		return $this->db->get();
	}

	public function salvar()
	{
		$id_turma	= $this->input->post("txt_id_turma");
		$turma	= $this->input->post("txt_turma");
		$id_serie	= $this->input->post("txt_id_serie");
		$id_sala	= $this->input->post("txt_id_sala");
		$data_cadastro	= $this->input->post("txt_data_turma");

		$valores = array(
			"id_turma" => $id_turma,	
			"id_serie" => $id_serie,	
			"id_sala"  => $id_sala,	
			"turma"  => $turma,	
			"data_cadastro"  => $data_cadastro			
		);

		if(($id_turma == "") || ($id_turma == NULL )){
			$this->db->insert('turma', $valores);
		}else{

			$this->db->where('id_turma', $id_turma);
			$this->db->update('turma', $valores);
		}
		
	}

	public function excluir($id){
		return $this->db->where("id_turma", $id)->delete("turma");
	}
}
