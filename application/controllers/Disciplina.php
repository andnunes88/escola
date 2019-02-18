<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplina extends CI_Controller {

	
	public function index()
	{
		$dados['nome_view'] = 'v_lstDisciplina';

		$this->load->model("M_disciplina");

		$dados['lista'] = $this->M_disciplina->listaDisciplina()->result();

		$this->load->view('template', $dados);
	}

	public function novo()
	{
		$dados['nome_view'] = 'v_frmDisciplina';

		$this->load->view('template', $dados);
	}

	public function salvar()
	{
		$this->load->model('M_disciplina');

		$this->M_disciplina->salvar();

		redirect("disciplina");
	}

	public function editar($id){
		$this->load->model('M_disciplina');

		$dados['disciplina'] = $this->M_disciplina->getDisciplina($id)->row();

		$dados['nome_view'] = 'v_frmDisciplina';

		$this->load->view('template', $dados);
	}

	public function excluir($id){
		$this->load->model('M_disciplina');
		$this->M_disciplina->excluir($id);
		redirect("disciplina");
	}
}
