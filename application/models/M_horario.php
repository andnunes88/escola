<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_horario extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getAluno($id){
		return $this->db->where('id_horario', $id)->get("horario");
	}

	public function listaAluno(){
		return $this->db->get("horario");
	}

	public function salvar()
	{
		$id_horario	= $this->input->post("id_horario");
		$foto	= $this->input->post("txt_foto");
		$horario	= $this->input->post("txt_horario");
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
			"id_horario" => $id_horario,	
			"foto" => $foto,	
			"nome_horario"  => $horario,	
			"sexo"  => $sexo,	
			"nome_pai"  => $pai,	
			"nome_mae"  => $mae,	
			"nascimento"  => $data_nascimento,	
			"email_horario"  => $email,	
			"senha"  => $senha,	
			"endereco_horario"  => $endereco,	
			"bairro_horario"  => $bairro,
			"cidade_horario"  => $cidade,	
			"uf"  => $uf,	
			"cep"  => $cep,	
			"celular_horario"  => $celular,	
			"fone_responsavel"  => $fone_responsavel,	
			"email_responsavel"  => $email_responsavel,	
			"rg_horario"  => $rg,
			"cpf_horario"  => $cpf
		);

		if(($id_horario == "") || ($id_horario == NULL )){
			$this->db->insert('horario_escolar', $valores);
		}else{

			$this->db->where('id_horario', $id_horario);
			$this->db->update('horario', $valores);
		}
		
	}

	public function excluir($id){
		return $this->db->where("id_horario", $id)->delete("horario");
	}
}
