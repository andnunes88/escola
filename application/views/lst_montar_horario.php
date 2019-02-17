<?php include"menu.php";?>
<div class="base-direito">
	<div class="base-lista">
	<h1 class="titulo"><i class="icone cad"></i>montar horário</h1>
	<div class="backform">
	<div class="base-form">
		<form action="" name="">		
			<div  class="row">		
				<div class="col4">
					<span>turma</span>
					<select name="campo">
						<option value="disciplina">Turno vespetino</option>
						<option value="disciplina">Ano Letivo</option>
					</select>	
				</div>	
				<div class="col4">
					<span>disciplina</span>
					<select name="campo">
						<option value="disciplina">Turno vespetino</option>
						<option value="disciplina">Ano Letivo</option>
					</select>	
				</div>
				<div class="col4">
					<span>professor</span>
					<select name="campo">
						<option value="disciplina">Turno vespetino</option>
						<option value="disciplina">Ano Letivo</option>
					</select>	
				</div>
				<div class="col2">
					<span>&nbsp;</span>
					<input type="submit" name="Submit" value="Inserir" class="but">
				</div>
			</div>	
		</form>
	</div>
	</div>
	
		
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

</div>
</div>
