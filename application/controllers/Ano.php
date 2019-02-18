<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ano extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$dados['nome_view'] = 'v_lstAnoLetivo';
		
		$this->load->model("M_ano");

		$dados['lista'] = $this->M_ano->listaAnoLetivo()->result();

		$this->load->view('template', $dados);
	}

	public function novo()
	{
		$dados['nome_view'] = 'v_frmAnoLetivo';

		$this->load->view('template', $dados);
	}

	public function salvar()
	{
		$this->load->model('M_ano');

		$this->M_ano->salvar();

		redirect("ano");
	}

	public function editar($id){
		$this->load->model('M_ano');

		$dados['ano'] = $this->M_ano->getAnoLetivo($id)->row();

		$dados['nome_view'] = 'v_frmAnoLetivo';

		$this->load->view('template', $dados);
	}

	public function excluir($id){
		$this->load->model('M_ano');
		$this->M_ano->excluir($id);
		redirect("ano");
	}
}
