<?php include"menu.php";?>
<div class="base-direito">
	<div class="base-lista">
	<h1 class="titulo"><i class="icone cad"></i>selecionar aluno por turma</h1>
	<div class="backform">
	<div class="base-form">
		<form action="" name="">		
			<div  class="row">		
				<div class="col9">
					<span>Selecione o turno</span>
					<select name="campo">
						<option value="disciplina">Turno vespetino</option>
						<option value="disciplina">Ano Letivo</option>
					</select>	
				</div>
				<div class="col3">
					<span>&nbsp;</span>
					<input type="submit" name="Submit" value="Inserir" class="but">
				</div>
			</div>	
		</form>
	</div>
	</div>
	
		
<div class="caixa-lista">

	<a href="#janela1" class="but editar" rel="modal">Inserir aluno</a>
	
	<h2 class="titulo"><i class="icone lista"></i>LISTA DE ALUNOS DA TURMA</h2>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<thead>
		<tr> 
			<th align="center">ID</th>
			<th align="left">Nome</th> 
			<th align="center">Email do aluno</th> 
			<th colspan="2" align="center">Ação</th>
		  
		</tr>
		</thead>
		<tbody>
            <tr> 			
				<td align="center" class="coluna1">1</td>
                <td align="left" class="coluna1">AFONSO JOSE DE SOUSA SANTANA</td>
                <td align="center" class="coluna1">	Email@gmail.com</td>
				<td align="center" class="coluna1"><a href="" class="but excluir">Excluir</a></td>
						 
			</tr>
            <tr> 			
				<td align="center" class="coluna2">1</td>               
                <td align="left" class="coluna2">	AFONSO JOSE DE SOUSA SANTANA</td>
                <td align="center" class="coluna2">	Email@gmail.com</td>
				<td align="center" class="coluna2"></a><a href="" class="but excluir">Excluir</a></td>	 
			</tr>
            
		</tbody>
		</table>
	</div>

</div>
</div>

<?php include"modal_lista_aluno.php";?>