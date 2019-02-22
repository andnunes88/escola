<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_serie extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getSerie($id){
		return $this->db->where('id_serie', $id)->get("serie");
	}

	public function listaSerie(){
		return $this->db->get("serie");
	}

	public function salvar()
	{
		$id_serie	= $this->input->post("id_serie");
		$serie	= $this->input->post("txt_serie");
		

		$valores = array(
			"id_serie" => $id_serie,	
			"serie" => $serie			
		);

		if(($id_serie == "") || ($id_serie == NULL )){
			$this->db->insert('serie', $valores);
		}else{

			$this->db->where('id_serie', $id_serie);
			$this->db->update('serie', $valores);
		}
		
	}

	public function excluir($id){
		return $this->db->where("id_serie", $id)->delete("serie");
	}
}
