<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_turma extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getAluno($id){
		return $this->db->where('id_turma', $id)->get("turma");
	}

	public function listaAluno(){
		return $this->db->get("turma");
	}

	public function salvar()
	{
		$id_turma	= $this->input->post("id_turma");
		$foto	= $this->input->post("txt_foto");
		$turma	= $this->input->post("txt_turma");
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
			"id_turma" => $id_turma,	
			"foto" => $foto,	
			"nome_turma"  => $turma,	
			"sexo"  => $sexo,	
			"nome_pai"  => $pai,	
			"nome_mae"  => $mae,	
			"nascimento"  => $data_nascimento,	
			"email_turma"  => $email,	
			"senha"  => $senha,	
			"endereco_turma"  => $endereco,	
			"bairro_turma"  => $bairro,
			"cidade_turma"  => $cidade,	
			"uf"  => $uf,	
			"cep"  => $cep,	
			"celular_turma"  => $celular,	
			"fone_responsavel"  => $fone_responsavel,	
			"email_responsavel"  => $email_responsavel,	
			"rg_turma"  => $rg,
			"cpf_turma"  => $cpf
		);

		if(($id_turma == "") || ($id_turma == NULL )){
			$this->db->insert('turma_escolar', $valores);
		}else{

			$this->db->where('id_turma', $id_turma);
			$this->db->update('turma', $valores);
		}
		
	}

	public function excluir($id){
		return $this->db->where("id_turma", $id)->delete("turma");
	}
}
