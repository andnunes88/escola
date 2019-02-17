<?php include"menu.php";?>

<div class="base-direito">
<div class="base-lista">
<h1 class="titulo"><i class="icone confirma"></i>Horário</h1>	
	<div class="backform">
	<div class="base-form">

		<form action="" name="">
			
				<span>BUSCAR DE HORÁRIO</span>
				<div  class="row">
				<div class="col6">
					<input type="text" name="termodabusca" value="<?php //echo $termodabusca; ?>" class="tm2">
					<input type="hidden" name="pesq" value="ok">
				</div>
				<div class="col4">
					<select name="campo">
						<option value="turma">Turma</option>
						<option value="turno">Turno</option>
					</select>
				</div>
				<div class="col2">
					<input type="submit" name="Submit" value="Pesquisar" class="but">
				</div>
			</div>	
		</form>
	</div>
	</div>
	
<div class="caixa-lista">
	<h2 class="titulo"><i class="icone lista"></i>lista de horário</h2>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<thead>
		<tr> 
			<th align="center">ID</th>
			<th align="left">Horario</th> 
			<th align="center">Turno</th> 
			<th align="center">Inicio</th> 
			<th align="center">Fim</th> 
			<th colspan="2" align="center">Ação</th>
		  
		</tr>
		</thead>
		<tbody>
            <tr> 			
				<td align="center" class="coluna1">1</td>
                <td align="left" class="coluna1">1º Horário</td>
                <td align="center" class="coluna1">07:00</td>
                <td align="center" class="coluna1">matutino</td>
                <td align="center" class="coluna1">00/00/0000</td>
				<td align="center" class="coluna1"><a href="" class="but editar">Editar</a></td>
				<td align="center" class="coluna1"><a href="" class="but excluir">Excluir</a></td>						 
			</tr>
            <tr> 			
				<td align="center" class="coluna2">1</td>
                <td align="left" class="coluna2">1º Horário</td>
                <td align="center" class="coluna2">07:00</td>
                <td align="center" class="coluna2">matutino</td>
                <td align="center" class="coluna2">00/00/0000</td>
				<td align="center" class="coluna2"><a href="" class="but editar">Editar</a></td>
				<td align="center" class="coluna2"><a href="" class="but excluir">Excluir</a></td>						 
			</tr>
            <tr> 			
				<td align="center" class="coluna1">1</td>
                <td align="left" class="coluna1">1º Horário</td>
                <td align="center" class="coluna1">07:00</td>
                <td align="center" class="coluna1">matutino</td>
                <td align="center" class="coluna1">00/00/0000</td>
				<td align="center" class="coluna1"><a href="" class="but editar">Editar</a></td>
				<td align="center" class="coluna1"><a href="" class="but excluir">Excluir</a></td>						 
			</tr>
            <tr> 			
				<td align="center" class="coluna2">1</td>
                <td align="left" class="coluna2">1º Horário</td>
                <td align="center" class="coluna2">07:00</td>
                <td align="center" class="coluna2">matutino</td>
                <td align="center" class="coluna2">00/00/0000</td>
				<td align="center" class="coluna2"><a href="" class="but editar">Editar</a></td>
				<td align="center" class="coluna2"><a href="" class="but excluir">Excluir</a></td>						 
			</tr>
		</tbody>
		</table>
	</div>
	</div>
	
</div>