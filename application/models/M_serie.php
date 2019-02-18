<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_serie extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getAluno($id){
		return $this->db->where('id_serie', $id)->get("serie");
	}

	public function listaAluno(){
		return $this->db->get("serie");
	}

	public function salvar()
	{
		$id_serie	= $this->input->post("id_serie");
		$foto	= $this->input->post("txt_foto");
		$serie	= $this->input->post("txt_serie");
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
			"id_serie" => $id_serie,	
			"foto" => $foto,	
			"nome_serie"  => $serie,	
			"sexo"  => $sexo,	
			"nome_pai"  => $pai,	
			"nome_mae"  => $mae,	
			"nascimento"  => $data_nascimento,	
			"email_serie"  => $email,	
			"senha"  => $senha,	
			"endereco_serie"  => $endereco,	
			"bairro_serie"  => $bairro,
			"cidade_serie"  => $cidade,	
			"uf"  => $uf,	
			"cep"  => $cep,	
			"celular_serie"  => $celular,	
			"fone_responsavel"  => $fone_responsavel,	
			"email_responsavel"  => $email_responsavel,	
			"rg_serie"  => $rg,
			"cpf_serie"  => $cpf
		);

		if(($id_serie == "") || ($id_serie == NULL )){
			$this->db->insert('serie_escolar', $valores);
		}else{

			$this->db->where('id_serie', $id_serie);
			$this->db->update('serie', $valores);
		}
		
	}

	public function excluir($id){
		return $this->db->where("id_serie", $id)->delete("serie");
	}
}
