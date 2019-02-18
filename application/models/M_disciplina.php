<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_disciplina extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getAluno($id){
		return $this->db->where('id_disciplina', $id)->get("disciplina");
	}

	public function listaAluno(){
		return $this->db->get("disciplina");
	}

	public function salvar()
	{
		$id_disciplina	= $this->input->post("id_disciplina");
		$foto	= $this->input->post("txt_foto");
		$disciplina	= $this->input->post("txt_disciplina");
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
			"id_disciplina" => $id_disciplina,	
			"foto" => $foto,	
			"nome_disciplina"  => $disciplina,	
			"sexo"  => $sexo,	
			"nome_pai"  => $pai,	
			"nome_mae"  => $mae,	
			"nascimento"  => $data_nascimento,	
			"email_disciplina"  => $email,	
			"senha"  => $senha,	
			"endereco_disciplina"  => $endereco,	
			"bairro_disciplina"  => $bairro,
			"cidade_disciplina"  => $cidade,	
			"uf"  => $uf,	
			"cep"  => $cep,	
			"celular_disciplina"  => $celular,	
			"fone_responsavel"  => $fone_responsavel,	
			"email_responsavel"  => $email_responsavel,	
			"rg_disciplina"  => $rg,
			"cpf_disciplina"  => $cpf
		);

		if(($id_disciplina == "") || ($id_disciplina == NULL )){
			$this->db->insert('disciplina_escolar', $valores);
		}else{

			$this->db->where('id_disciplina', $id_disciplina);
			$this->db->update('disciplina', $valores);
		}
		
	}

	public function excluir($id){
		return $this->db->where("id_disciplina", $id)->delete("disciplina");
	}
}
