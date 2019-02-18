<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_calendario extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getAluno($id){
		return $this->db->where('id_calendario', $id)->get("calendario_escolar");
	}

	public function listaAluno(){
		return $this->db->get("calendario_escolar");
	}

	public function salvar()
	{
		$id_calendario	= $this->input->post("id_calendario");
		$foto	= $this->input->post("txt_foto");
		$calendario	= $this->input->post("txt_calendario");
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
			"id_calendario" => $id_calendario,	
			"foto" => $foto,	
			"nome_calendario"  => $calendario,	
			"sexo"  => $sexo,	
			"nome_pai"  => $pai,	
			"nome_mae"  => $mae,	
			"nascimento"  => $data_nascimento,	
			"email_calendario"  => $email,	
			"senha"  => $senha,	
			"endereco_calendario"  => $endereco,	
			"bairro_calendario"  => $bairro,
			"cidade_calendario"  => $cidade,	
			"uf"  => $uf,	
			"cep"  => $cep,	
			"celular_calendario"  => $celular,	
			"fone_responsavel"  => $fone_responsavel,	
			"email_responsavel"  => $email_responsavel,	
			"rg_calendario"  => $rg,
			"cpf_calendario"  => $cpf
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
