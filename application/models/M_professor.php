<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_professor extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getAluno($id){
		return $this->db->where('id_professor', $id)->get("professor");
	}

	public function listaAluno(){
		return $this->db->get("professor");
	}

	public function salvar()
	{
		$id_professor	= $this->input->post("id_professor");
		$foto	= $this->input->post("txt_foto");
		$professor	= $this->input->post("txt_professor");
		$sexo	= $this->input->post("txt_sexo");
		$pai	= $this->input->post("txt_pai");
		$mae	= $this->input->post("txt_mae");

		$data_nascimento	= $this->input->post("txt_nascimento");
		$email	= $this->input->post("txt_email");
		$senha	= $this->input->post("txt_senha");
		$endereco	= $this->input->post("txt_endereco");
		$bairro	= $this->input->post("txt_bairro");
		$cidade	= $this->input->post("txt_cidade");
		$uf	= $this->input->post("txt_uf");
		$cep	= $this->input->post("txt_cep");
		$celular	= $this->input->post("txt_celular");
		$fone_responsavel	= $this->input->post("txt_fone_responsavel");
		$email_responsavel	= $this->input->post("txt_email_responsavel");
		$rg	= $this->input->post("txt_rg");
		$cpf	= $this->input->post("txt_cpf");

		$valores = array(
			"id_professor" => $id_professor,	
			"foto" => $foto,	
			"nome_professor"  => $professor,	
			"sexo"  => $sexo,	
			"nome_pai"  => $pai,	
			"nome_mae"  => $mae,	
			"nascimento"  => $data_nascimento,	
			"email_professor"  => $email,	
			"senha"  => $senha,	
			"endereco_professor"  => $endereco,	
			"bairro_professor"  => $bairro,
			"cidade_professor"  => $cidade,	
			"uf"  => $uf,	
			"cep"  => $cep,	
			"celular_professor"  => $celular,	
			"fone_responsavel"  => $fone_responsavel,	
			"email_responsavel"  => $email_responsavel,	
			"rg_professor"  => $rg,
			"cpf_professor"  => $cpf
		);

		if(($id_professor == "") || ($id_professor == NULL )){
			$this->db->insert('professor_escolar', $valores);
		}else{

			$this->db->where('id_professor', $id_professor);
			$this->db->update('professor', $valores);
		}
		
	}

	public function excluir($id){
		return $this->db->where("id_professor", $id)->delete("professor");
	}
}
