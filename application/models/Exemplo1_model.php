<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aluno extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function salvar()
	{
		echo 'Foi salvo com sucesso!';
		
	}
}
