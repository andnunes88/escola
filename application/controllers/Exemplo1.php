<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Exemplo1_model');
	}

	public function index()
	{
		$dados['titulo'] = 'Bem vindo ao exemplo 1';
		$dados['corpo'] = 'Primeiro exemplo 01';

		$this->load->view('exemplo1', $dados);
	}

	public function login()
	{
		$this->Exemplo1_model->salvar();
		
	}
}
