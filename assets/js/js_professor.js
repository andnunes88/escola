$(function(){

	$("#txt_id_professor").change(function(){
		
		listaDisciplinaProfessor($("#txt_id_professor").val());
		
	});

});

function listaDisciplinaProfessor(id_professor){
	retorno = "";
	i = 0;
	
	$.ajax({
		url: base_url + "professor/listaDisciplinaProfessorJson/"+ id_professor,
		type: "get",
		dataType: "Json",
		success: function(data){
			
			$.each(data, function(key){

				retorno += "<tr>";
				retorno += "<td align='center' class='coluna1'>" + data[key].id_disciplina + "</td>";
		        retorno += "<td align='left' class='coluna1'>" + data[key].disciplina + "</td>";
				retorno += "<td align='center' class='coluna1'>";
				retorno += "<a href='javascript:void(0)' onclick='excluirDisciplinaProfessor(" + data[key].id_disciplina + "," + data[key].id_professor + ")'> Excluir </a>";
				retorno += "</td></tr>";
				i++;
				//console.log(data[key].disciplina);
			});
			
			$("#listaDisciplinas").html(retorno);
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