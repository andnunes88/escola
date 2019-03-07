<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_professor extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getProfessor($id){
		return $this->db->where('id_professor', $id)->get("professor");
	}

	public function listaProfessor(){
		return $this->db->get("professor");
	}

	public function salvar()
	{
		$id_professor	= $this->input->post("id_professor");
		$foto	= $this->input->post("txt_foto");
		$professor	= $this->input->post("txt_professor");
		$sexo	= $this->input->post("txt_sexo");
		$email	= $this->input->post("txt_email");
		$endereco	= $this->input->post("txt_endereco");
		$bairro	= $this->input->post("txt_bairro");
		$cidade	= $this->input->post("txt_cidade");
		$uf	= $this->input->post("txt_uf");
		$cep	= $this->input->post("txt_cep");
		$celular	= $this->input->post("txt_celular");
		$fone	= $this->input->post("txt_fone");
		$email	= $this->input->post("txt_email");
		$rg	= $this->input->post("txt_rg");
		$cpf	= $this->input->post("txt_cpf");

		$valores = array(
			"id_professor" => $id_professor,	
			"imagem_professor" => $foto,	
			"nome_professor"  => $professor,	
			"sexo_professor"  => $sexo,	
			"email_professor"  => $email,	
			"endereco_professor"  => $endereco,	
			"bairro_professor"  => $bairro,
			"cidade_professor"  => $cidade,	
			"uf_professor"  => $uf,	
			"uf_professor"  => $cep,	
			"celular_professor"  => $celular,	
			"fone_professor"  => $fone,	
			"rg_professor"  => $rg,
			"cpf_professor"  => $cpf
		);

		if(($id_professor == "") || ($id_professor == NULL )){
			$this->db->insert('professor', $valores);
		}else{

			$this->db->where('id_professor', $id_professor);
			$this->db->update('professor', $valores);
		}
		
	}

	public function excluir($id){
		return $this->db->where("id_professor", $id)->delete("professor");
	}

	public function inserirDisciplinaProfessor(){

		$id_professor = $this->input->post("txt_id_professor");
		$id_disciplina = $this->input->post("txt_id_disciplina");

		$valores = array(
			"id_professor" => $id_professor,
			"id_disciplina" => $id_disciplina
		);

		if(!$this->verificaSeTemDisciplina($id_disciplina, $id_professor)){

			return $this->db->insert("disciplina_professor", $valores);

		}else{

			return false;
		}
		
	}

	public function verificaSeTemDisciplina($id_disciplina, $id_professor){

		$id_professor = $this->input->post("txt_id_professor");
		$id_disciplina = $this->input->post("txt_id_disciplina");

		$this->db->where("id_professor", $id_professor);
		$this->db->where("id_disciplina", $id_disciplina);

		if($this->db->get("disciplina_professor")->num_rows() > 0){
			
			return true;

		}else{
			
			return false;
		}		

	}

	public function listaDisciplinaProfessor($id_professor){
		
		$this->db->select("disciplina.disciplina, disciplina_professor.*");
		$this->db->from("disciplina_professor");
		$this->db->join("professor", "professor.id_professor = disciplina_professor.id_professor");
		$this->db->join("disciplina", "disciplina.id_disciplina = disciplina_professor.id_disciplina");
		$this->db->where("disciplina_professor.id_professor", $id_professor);

		return $this->db->get();

	}

	public function excluirDisciplinaProfessor(){
		$id_professor = $this->input->post("txt_id_professor");
		$id_disciplina = $this->input->post("txt_id_disciplina");

		$this->db->where("id_professor", $id_professor);
		$this->db->where("id_disciplina", $id_disciplina);
		$this->db->delete("disciplina_professor");

	}
}
