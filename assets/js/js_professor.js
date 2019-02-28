$(function(){

	$("#txt_id_professor").change(function(){
		
		listaDisciplinaProfessor($("#txt_id_professor").val());
		
	});

});

function listaDisciplinaProfessor(id_professor){
	
	$.ajax({
		url: base_url + "professor/listaDisciplinaProfessor/"+ id_professor,
		type: "get",
		success: function(data){
			
			$("#listaDisciplinas").html(data);
		}
	});
}

function inserirDisciplinaProfessor(){
	id_professor = $("#txt_id_professor").val();
	id_disciplina = $("#txt_id_disciplina").val();

	
	$.ajax({

		url: base_url + "professor/inserirDisciplinaProfessor2",
		type: "post",
		data: {
			txt_id_professor: id_professor,
			txt_id_disciplina: id_disciplina
		},
		success: function(){
			listaDisciplinaProfessor(id_professor);
		}

	});
	
}

function excluirDisciplinaProfessor(id_disciplina, id_professor){

	$.ajax({

		url: base_url + "professor/excluirDisciplinaProfessor",
		type: "post",
		data: {
			txt_id_professor: id_professor,
			txt_id_disciplina: id_disciplina
		},
		success: function(){
			listaDisciplinaProfessor(id_professor);
		}

	});
}