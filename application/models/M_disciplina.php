<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_disciplina extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getDisciplina($id){
		return $this->db->where('id_disciplina', $id)->get("disciplina");
	}

	public function listaDisciplina(){
		return $this->db->get("disciplina");
	}

	public function salvar()
	{
		$id_disciplina	= $this->input->post("txt_id_disciplina");
		$disciplina	= $this->input->post("txt_disciplina");
		$obj_estudo	= $this->input->post("txt_obj_estudo");
		$metodologiaxo	= $this->input->post("txt_metodologia");
		$bibliografia	= $this->input->post("txt_bibliografia");
		
		$valores = array(
			"id_disciplina" => $id_disciplina,	
			"disciplina" => $disciplina,	
			"objetivo"  => $obj_estudo,	
			"metodologia"  => $metodologiaxo,	
			"bibliografia"  => $bibliografia	
		);

		if(($id_disciplina == "") || ($id_disciplina == NULL )){
			$this->db->insert('disciplina', $valores);
		}else{

			$this->db->where('id_disciplina', $id_disciplina);
			$this->db->update('disciplina', $valores);
		}
		
	}

	public function excluir($id){
		return $this->db->where("id_disciplina", $id)->delete("disciplina");
	}
}
