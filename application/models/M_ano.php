<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ano extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getAluno($id){
		return $this->db->where('id_ano', $id)->get("ano_letivo");
	}

	public function listaAluno(){
		return $this->db->get("ano_letivo");
	}

	public function salvar()
	{
		$id_ano	= $this->input->post("id_ano");
		$foto	= $this->input->post("txt_foto");
		$ano	= $this->input->post("txt_ano");
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
			"id_ano" => $id_ano,	
			"foto" => $foto,	
			"nome_ano"  => $ano,	
			"sexo"  => $sexo,	
			"nome_pai"  => $pai,	
			"nome_mae"  => $mae,	
			"nascimento"  => $data_nascimento,	
			"email_ano"  => $email,	
			"senha"  => $senha,	
			"endereco_ano"  => $endereco,	
			"bairro_ano"  => $bairro,
			"cidade_ano"  => $cidade,	
			"uf"  => $uf,	
			"cep"  => $cep,	
			"celular_ano"  => $celular,	
			"fone_responsavel"  => $fone_responsavel,	
			"email_responsavel"  => $email_responsavel,	
			"rg_ano"  => $rg,
			"cpf_ano"  => $cpf
		);

		if(($id_ano == "") || ($id_ano == NULL )){
			$this->db->insert('ano_letivo', $valores);
		}else{

			$this->db->where('id_ano', $id_ano);
			$this->db->update('ano_letivo', $valores);
		}
		
	}

	public function excluir($id){
		return $this->db->where("id_ano", $id)->delete("ano_letivo");
	}
}
