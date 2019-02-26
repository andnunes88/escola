<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turma extends CI_Controller {

	
	public function index()
	{
		$dados['nome_view'] = 'v_lstTurma';

		$this->load->model("M_turma");

		$dados['lista'] = $this->M_turma->listaTurma()->result();

		$this->load->view('template', $dados);
	}

	public function novo()
	{
		$dados['nome_view'] = 'v_frmTurma';

		$this->load->view('template', $dados);
	}

	public function salvar()
	{
		$this->load->model('M_turma');

		$this->M_turma->salvar();

		redirect("turma");
	}

	public function editar($id){
		$this->load->model('M_turma');
		$this->load->model('M_serie');
		$this->load->model('M_sala');

		$dados['turma'] = $this->M_turma->getTurma($id)->row();		
		$dados['serie'] = $this->M_serie->listaSerie()->result();		
		$dados['salas'] = $this->M_sala->listaSerie()->result();
		
		$dados['nome_view'] = 'v_frmTurma';

		$this->load->view('template', $dados);
	}

	public function excluir($id){
		$this->load->model('M_turma');
		$this->M_turma->excluir($id);
		redirect("turma");
	}
}
