<?php include"menu.php";?>

<div class="base-direito">
<div class="base-lista">
<h1 class="titulo"><i class="icone confirma"></i>Calendários</h1>
	<div class="backform">
	<div class="base-form">

		<form action="" name="">
			
				<span>BUSCAR DE CALENDÁRIO</span>
				<div  class="row">
				<div class="col6">
					<input type="text" name="termodabusca" value="<?php //echo $termodabusca; ?>" class="tm2">
					<input type="hidden" name="pesq" value="ok">
				</div>
				<div class="col4">
					<select name="campo">
						<option value="disciplina">Ano Letivo</option>
						<option value="disciplina">Ano Letivo</option>
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
	<h2 class="titulo"><i class="icone lista"></i>lista de calendário</h2>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<thead>
		<tr> 
			<th align="center">ID</th>
			<th align="center">Data</th>
			<th align="center">atividade</th>	 
			<th align="center">Feriado</th>	 
			<th align="center">Tem aula</th>	 
			<th colspan="2" align="center">Ação</th>
		  
		</tr>
		</thead>
		<tbody>
            <tr> 			
				<td align="center" class="coluna1">1</td>
                <td align="center" class="coluna1">0000-00-00</td>
                <td align="center" class="coluna1">Carnaval</td>
                <td align="center" class="coluna1">S</td>
                <td align="center" class="coluna1">N</td>
				<td align="center" class="coluna1"><a href="" class="but editar">Editar</a><a href="" class="but excluir">Excluir</a></td>
			</tr>
            <tr> 			
				<td align="center" class="coluna2">1</td>
                <td align="center" class="coluna2">0000-00-00</td>
                <td align="center" class="coluna2">Carnaval</td>
                <td align="center" class="coluna2">S</td>
                <td align="center" class="coluna2">N</td>
				<td align="center" class="coluna2"><a href="" class="but editar">Editar</a><a href="" class="but excluir">Excluir</a></td>
			</tr>
            <tr> 			
				<td align="center" class="coluna1">1</td>
                <td align="center" class="coluna1">0000-00-00</td>
                <td align="center" class="coluna1">Carnaval</td>
                <td align="center" class="coluna1">S</td>
                <td align="center" class="coluna1">N</td>
				<td align="center" class="coluna1"><a href="" class="but editar">Editar</a><a href="" class="but excluir">Excluir</a></td>
			</tr>
</tbody>
</table>
	</div>
	</div>
	
</div>