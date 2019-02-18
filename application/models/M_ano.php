<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ano extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getAnoLetivo($id){
		return $this->db->where('id_ano_letivo', $id)->get("ano_letivo");
	}

	public function listaAnoLetivo(){
		return $this->db->get("ano_letivo");
	}

	public function salvar()
	{
		$id_ano	= $this->input->post("id_ano");
		$descricao = $this->input->post("txt_descricao");
	    $qtde_turmas = $this->input->post("txt_qtde_turmas");
	    $inicio_matricula = $this->input->post("txt_inicio_matricula");
	    $fim_matricula = $this->input->post("txt_fim_matricula");
	    $inicio_ano_letivo = $this->input->post("txt_inicio_ano_letivo");
	    $fim_ano_letivo = $this->input->post("txt_fim_ano_letivo");
	    $inicio_primeiro_bimestre = $this->input->post("txt_inicio_primeiro_bimestre");
	    $fim_primeiro_bimestre = $this->input->post("txt_fim_primeiro_bimestre");
	    $inicio_segundo_bimestre = $this->input->post("txt_inicio_segundo_bimestre");
	    $fim_segundo_bimestre = $this->input->post("txt_fim_segundo_bimestre");
	    $inicio_terceiro_bimestre = $this->input->post("txt_inicio_terceiro_bimestre");;
	    $fim_terceiro_bimestre = $this->input->post("txt_fim_terceiro_bimestre");
	    $inicio_quarto_bimestre = $this->input->post("txt_inicio_quarto_bimestre");
	    $fim_quarto_bimestre = $this->input->post("txt_fim_quarto_bimestre");		

		$valores = array(
			"id_ano_letivo" => $id_ano,	
			"descricao" => $descricao,	
			"qtde_turmas"  => $qtde_turmas,	
			"inicio_matricula"  => $inicio_matricula,	
			"fim_matricula"  => $fim_matricula,	
			"inicio_ano_letivo"  => $inicio_ano_letivo,	
			"fim_ano_letivo"  => $fim_ano_letivo,	
			"inicio_primeiro_bimestre"  => $inicio_primeiro_bimestre,	
			"fim_primeiro_bimestre"  => $fim_primeiro_bimestre,	
			"inicio_segundo_bimestre"  => $inicio_segundo_bimestre,	
			"fim_segundo_bimestre"  => $fim_segundo_bimestre,	
			"inicio_terceiro_bimestre"  => $inicio_terceiro_bimestre,	
			"fim_terceiro_bimestre"  => $fim_terceiro_bimestre,	
			"inicio_quarto_bimestre"  => $inicio_quarto_bimestre,	
			"fim_quarto_bimestre"  => $fim_quarto_bimestre
		
		);

		
		if(($id_ano == "") || ($id_ano == NULL )){
			$this->db->insert('ano_letivo', $valores);
		}else{

			$this->db->where('id_ano_letivo', $id_ano);
			$this->db->update('ano_letivo', $valores);
		}
		
	}

	public function excluir($id){
		return $this->db->where("id_ano_letivo", $id)->delete("ano_letivo");
	}
}
