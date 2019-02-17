<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

	
	public function index()
	{
		$dados['nome_view'] = 'v_home';
		
		$this->load->view('template', $dados);
	}
}
