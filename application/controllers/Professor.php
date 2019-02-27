<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends CI_Controller {

	
	public function index()
	{
		$dados['nome_view'] = 'v_lstProfessor';

		$this->load->model("M_professor");

		$dados['lista'] = $this->M_professor->listaProfessor()->result();

		$this->load->view('template', $dados);
	}

	public function novo()
	{
		$dados['nome_view'] = 'v_frmProfessor';

		$this->load->view('template', $dados);
	}

	public function salvar()
	{
		$this->load->model('M_professor');

		$this->M_professor->salvar();

		redirect("professor");
	}

	public function editar($id){
		$this->load->model('M_professor');

		$dados['professor'] = $this->M_professor->getProfessor($id)->row();

		$dados['nome_view'] = 'v_frmProfessor';

		$this->load->view('template', $dados);
	}

	public function excluir($id){
		$this->load->model('M_professor');
		$this->M_professor->excluir($id);
		redirect("professor");
	}

	public function disciplinaProfessor($id_professor=NULL){

		$this->load->model('M_professor');
		$this->load->model('M_disciplina');

		$dados['professores'] = $this->M_professor->listaProfessor()->result();
		$dados['disciplinas'] = $this->M_disciplina->listaDisciplina()->result();

		if($id_professor != NULL){
			$dados['lista'] = $this->M_professor->listaDisciplinaProfessor($id_professor)->result();
		}
		
		$dados['nome_view'] = 'v_frmDisciplinaProfessor';

		$this->load->view('template', $dados);

	}

	public function inserirDisciplinaProfessor(){
		$this->load->model('M_professor');
		$this->M_professor->inserirDisciplinaProfessor();
		$id_professor = $this->input->post('txt_id_professor');
		redirect("professor/disciplinaProfessor/".$id_professor);
	}

	public function listaDisciplinaProfessor($id_professor){
		$this->load->model("M_Professor");
		$consulta = $this->M_Professor->listaDisciplinaProfessor($id_professor)->result();
		$retorno = "";

		if($consulta){

			foreach ($consulta as $linha) {
							
		        $retorno .= "<tr>";
				$retorno .= "<td align='center' class='coluna1'> $linha->id_disciplina </td>";
		        $retorno .= "<td align='left' class='coluna1'> $linha->disciplina </td>";
				$retorno .= "<td align='center' class='coluna1'>";
				$retorno .= "<td align='center' class='coluna1'>Excluir";
				$retorno .= "</td></tr>";

			} 	

		}else{
			$retorno = "Nunhum item";
		}

		echo $retorno;
	}
}
