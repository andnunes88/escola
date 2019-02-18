<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_calendario extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getCalendario($id){
		return $this->db->where('id_calendario', $id)->get("calendario_escolar");
	}

	public function listaCalendario(){
		return $this->db->get("calendario_escolar");
	}

	public function salvar()
	{
		$id_calendario = $this->input->post("txt_id_calendario");
		$id_ano_letivo = $this->input->post("txt_id_ano_letivo");
		$tem_aula   = $this->input->post("txt_tem_aula");
		$feriado = $this->input->post("txt_feriado");
		$data = $this->input->post("txt_data");
		$descricao  = $this->input->post("txt_descricao");		

		$valores = array(
			"id_ano_letivo" => $id_ano_letivo,	
			"descricao_calendario"  => $descricao,	
			"data_calendario"  => $data,	
			"tem_aula"  => $tem_aula,	
			"feriado"  => $feriado			
		);	


		if(($id_calendario == "") || ($id_calendario == NULL )){
			$this->db->insert('calendario_escolar', $valores);
		}else{

			$this->db->where('id_calendario', $id_calendario);
			$this->db->update('calendario_escolar', $valores);
		}
		
	}

	public function excluir($id){
		return $this->db->where("id_calendario", $id)->delete("calendario_escolar");
	}
}
