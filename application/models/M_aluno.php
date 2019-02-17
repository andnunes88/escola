<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aluno extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function listaAluno(){
		return $this->db->get("aluno");
	}

	public function salvar()
	{
		$id_aluno	= $this->input->post("id_aluno");
		$foto	= $this->input->post("txt_foto");
		$aluno	= $this->input->post("txt_aluno");
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
			"id_aluno" => $id_aluno,	
			"foto" => $foto,	
			"nome_aluno"  => $aluno,	
			"sexo"  => $sexo,	
			"nome_pai"  => $pai,	
			"nome_mae"  => $mae,	
			"nascimento"  => $data_nascimento,	
			"email_aluno"  => $email,	
			"senha"  => $senha,	
			"endereco_aluno"  => $endereco,	
			"bairro_aluno"  => $bairro,
			"cidade_aluno"  => $cidade,	
			"uf"  => $uf,	
			"cep"  => $cep,	
			"celular_aluno"  => $celular,	
			"fone_responsavel"  => $fone_responsavel,	
			"email_responsavel"  => $email_responsavel,	
			"rg_aluno"  => $rg,
			"cpf_aluno"  => $cpf
		);

		$this->db->insert('aluno', $valores);
		
	}
}
