<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Horario extends CI_Controller {

	
	public function index()
	{
		$dados['nome_view'] = 'v_lstHorario';

		$this->load->model("M_horario");

		$dados['lista'] = $this->M_horario->listaHorario()->result();

		$this->load->view('template', $dados);
	}

	public function novo()
	{
		$dados['nome_view'] = 'v_frmHorario';

		$this->load->view('template', $dados);
	}

	public function salvar()
	{
		$this->load->model('M_horario');

		$this->M_horario->salvar();

		redirect("horario");
	}

	public function editar($id){
		$this->load->model('M_horario');

		$dados['horario'] = $this->M_horario->getHorario($id)->row();

		$dados['nome_view'] = 'v_frmHorario';

		$this->load->view('template', $dados);
	}

	public function excluir($id){
		$this->load->model('M_horario');
		$this->M_horario->excluir($id);
		redirect("horario");
	}
}
