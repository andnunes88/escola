<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie extends CI_Controller {

	
	public function index()
	{
		$dados['nome_view'] = 'v_lstSerie';

		$this->load->model("M_serie");

		$dados['lista'] = $this->M_serie->listaSerie()->result();

		$this->load->view('template', $dados);
	}

	public function novo()
	{
		$dados['nome_view'] = 'v_frmSerie';

		$this->load->view('template', $dados);
	}

	public function salvar()
	{
		$this->load->model('M_serie');

		$this->M_serie->salvar();

		redirect("serie");
	}

	public function editar($id){
		$this->load->model('M_serie');

		$dados['serie'] = $this->M_serie->getSerie($id)->row();

		$dados['nome_view'] = 'v_frmSerie';

		$this->load->view('template', $dados);
	}

	public function excluir($id){
		$this->load->model('M_serie');
		$this->M_serie->excluir($id);
		redirect("serie");
	}
}
