<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

	
	public function index()
	{
		$dados['nome_view'] = 'v_lstAluno';

		$this->load->model("M_ano");

		$dados['lista'] = $this->M_ano->listaAluno()->result();

		$this->load->view('template', $dados);
	}

	public function novo()
	{
		$dados['nome_view'] = 'v_frmAluno';

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

		$dados['ano'] = $this->M_ano->getAluno($id)->row();

		$dados['nome_view'] = 'v_frmAluno';

		$this->load->view('template', $dados);
	}

	public function excluir($id){
		$this->load->model('M_ano');
		$this->M_ano->excluir($id);
		redirect("ano");
	}
}
