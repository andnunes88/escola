<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendario extends CI_Controller {

	
	public function index()
	{
		$dados['nome_view'] = 'v_lstCalendario';

		$this->load->model("M_calendario");

		$dados['lista'] = $this->M_calendario->listaCalendario()->result();

		$this->load->view('template', $dados);
	}

	public function novo()
	{
		$dados['nome_view'] = 'v_frmCalendario';

		$this->load->view('template', $dados);
	}

	public function salvar()
	{
		$this->load->model('M_calendario');

		$this->M_calendario->salvar();

		redirect("calendario");
	}

	public function editar($id){
		$this->load->model('M_calendario');

		$dados['calendario'] = $this->M_calendario->getCalendario($id)->row();

		$dados['nome_view'] = 'v_frmCalendario';

		$this->load->view('template', $dados);
	}

	public function excluir($id){
		$this->load->model('M_calendario');
		$this->M_calendario->excluir($id);
		redirect("calendario");
	}
}
