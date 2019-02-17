<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

	
	public function index()
	{
		$dados['nome_view'] = 'v_lstAluno';

		$this->load->model("M_aluno");

		$dados['lista'] = $this->M_aluno->listaAluno()->result();

		$this->load->view('template', $dados);
	}

	public function novo()
	{
		$dados['nome_view'] = 'v_frmAluno';

		$this->load->view('template', $dados);
	}

	public function salvar()
	{
		$this->load->model('M_aluno');

		$this->M_aluno->salvar();

		redirect("aluno");
	}

	public function editar($id){
		$this->load->model('M_aluno');

		$dados['aluno'] = $this->M_aluno->getAluno($id)->row();
		
		$dados['nome_view'] = 'v_frmAluno';

		$this->load->view('template', $dados);
	}
}
