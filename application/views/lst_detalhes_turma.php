<?php include"menu.php";?>
<div class="base-direito">
	<div class="base-lista">
	<h1 class="titulo"><i class="icone confirma"></i>Detalhes da turma</h1>
	<div class="backform">
	<div class="base-form">
		<form action="" name="">		
			<div  class="row">		
				<div class="col12">
					<span>turma</span>
					<select name="campo">
						<option value="disciplina">Turno vespetino</option>
						<option value="disciplina">Ano Letivo</option>
					</select>	
				</div>
			</div>	
		</form>
	</div>
	</div>
	
	
<div id="caixa">
	<p id="abas">
		<a href="#aba1" class="selected">lista de alunos</a>
		<a href="#aba2" class="">disciplina</a>
		<a href="#aba3">horario</a>
	</p>	
	<ul id="conteudos">
		<li id="aba1" style="display: inline-block;">
			<div class="caixa-lista">
				<h2 class="titulo"><i class="icone lista"></i>lista de alunos</h2>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<thead>
					<tr> 
						<th align="center">ID</th>
						<th align="left">Aluno</th> 
						<th align="center">email</th> 
						<th align="center">fone</th> 
						<th colspan="2" align="center">Ação</th>
					  
					</tr>
					</thead>
					<tbody>
						<tr> 			
							<td align="center" class="coluna1">1</td>
							<td align="left" class="coluna1">ADRIA ROCHA LIMA</td>
							<td align="center" class="coluna1">	email@gmail.com</td>
							<td align="center" class="coluna1">	32504121</td>
							<td align="center" class="coluna1"><a href="" class="but editar">Editar</a><a href="" class="but excluir">Excluir</a></td>
									 
						</tr>
						<tr> 			
							<td align="center" class="coluna2">1</td>
							<td align="left" class="coluna2">ADRIA ROCHA LIMA</td>
							<td align="center" class="coluna2">	email@gmail.com</td>
							<td align="center" class="coluna2">	32504121</td>
							<td align="center" class="coluna2"><a href="" class="but editar">Editar</a><a href="" class="but excluir">Excluir</a></td>
									 
						</tr>
						<tr> 			
							<td align="center" class="coluna1">1</td>
							<td align="left" class="coluna1">ADRIA ROCHA LIMA</td>
							<td align="center" class="coluna1">	email@gmail.com</td>
							<td align="center" class="coluna1">	32504121</td>
							<td align="center" class="coluna1"><a href="" class="but editar">Editar</a><a href="" class="but excluir">Excluir</a></td>
									 
						</tr>
					</tbody>
					</table>
			</div>
		</li>
		
		
		<li id="aba2" style="display: inline-block;">
			<div class="caixa-lista">
				<h2 class="titulo"><i class="icone lista"></i>lista de disciplina</h2>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<thead>
					<tr> 
						<th align="center">ID</th>
						<th align="left" width="55%">disciplina</th> 						
						<th align="left">abreviação</th> 						
						<th colspan="2" align="center">Ação</th>
					  
					</tr>
					</thead>
					<tbody>
						<tr> 			
							<td align="center" class="coluna1">1</td>
							<td align="left" class="coluna1">Análise de Circuitos de CC e CA</td>				
							<td align="center" class="coluna1">	ACE</td>				
							<td align="center" class="coluna1"><a href="" class="but editar">Editar</a><a href="" class="but excluir">Excluir</a></td>
									 
						</tr>
						<tr> 			
							<td align="center" class="coluna2">1</td>
								<td align="left" class="coluna2">Análise de Circuitos de CC e CA</td>
								<td align="center" class="coluna2">	ACE</td>												
								<td align="center" class="coluna2"><a href="" class="but editar">Editar</a><a href="" class="but excluir">Excluir</a></td>
									 
						</tr>
						<tr> 			
							<td align="center" class="coluna1">1</td>
								<td align="left" class="coluna1">Análise de Circuitos de CC e CA</td>	
								<td align="center" class="coluna1">	ACE</td>												
								<td align="center" class="coluna1"><a href="" class="but editar">Editar</a><a href="" class="but excluir">Excluir</a></td>
									 
						</tr>
					</tbody>
					</table>
			</div>		
		</li>
		
		<li id="aba3" style="display: inline-block;">		
			<div class="caixa-lista tb-horario">
			<h2 class="titulo"><i class="icone lista"></i>LISTA DE horários</h2>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<thead>
				<tr> 
					<th align="center" width="18">Horário</th>
					<th align="center" width="18">Segunda</th> 
					<th align="center" width="18">Terça</th> 
					<th align="center" width="18">Quarta</th> 
					<th align="center" width="18">Quinta</th> 
					<th align="center" width="18">Sexta</th> 
					<th align="center" width="18">Sábado</th> 
					
				  
				</tr>
				</thead>
				<tbody>
					<tr> 			
						<td align="left">1º Horário: 07:00 - 07:45</td>
						<td align="center"><a href="javascript:;" onclick="inserirHorarioNaGrade(1, 1)" class="but butver">Inserir</a></td>
						<td align="center"><a href="javascript:;" onclick="inserirHorarioNaGrade(1, 1)" class="but butver">Inserir</a></td>
						<td align="center">Análise de Circuitos de CC e CA</td>
						<td align="center"><a href="javascript:;" onclick="inserirHorarioNaGrade(1, 1)" class="but butver">Inserir</a></td>
						<td align="center">Informática Básica</td>
						<td align="center"><a href="javascript:;" onclick="inserirHorarioNaGrade(1, 1)" class="but butver">Inserir</a></td>					 
					</tr>
					<tr> 			
						<td align="left">1º Horário: 07:00 - 07:45</td>
						<td align="center"><a href="javascript:;" onclick="inserirHorarioNaGrade(1, 1)" class="but butver">Inserir</a></td>
						<td align="center"><a href="javascript:;" onclick="inserirHorarioNaGrade(1, 1)" class="but butver">Inserir</a></td>
						<td align="center">Análise de Circuitos de CC e CA</td>
						<td align="center"><a href="javascript:;" onclick="inserirHorarioNaGrade(1, 1)" class="but butver">Inserir</a></td>
						<td align="center">Informática Básica</td>
						<td align="center"><a href="javascript:;" onclick="inserirHorarioNaGrade(1, 1)" class="but butver">Inserir</a></td>					 
					</tr>
					
				</tbody>
				</table>
			</div>
			</li>
</ul>
</div>
</div>
</div>
