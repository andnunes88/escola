<script >
	function confirmar_exclusao(calendario){
		if(!confirm("Tem certeza que deseja excluir o calendario: " + calendario + " ?")){
			return false;
		}
		return true;
	}
</script>

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
            
            <?php
            	foreach ($lista as $linha) {            	
            	?>            	

            <tr> 			
				<td align="center" class="coluna1"><?php echo $linha->id_calendario ?></td>
                <td align="center" class="coluna1"><?php echo $linha->data_calendario ?></td>
                <td align="center" class="coluna1"><?php echo $linha->descricao_calendario ?></td>
                <td align="center" class="coluna1"><?php echo $linha->feriado ?></td>
                <td align="center" class="coluna1"><?php echo $linha->tem_aula ?></td>
				<td align="center" class="coluna1">
					<a href="<?php echo base_url() . "/calendario/editar/" . $linha->id_calendario ?>" class="but editar">Editar</a>
						<a href="<?php echo base_url() . "/calendario/excluir/" . $linha->id_calendario ?>" class="but excluir"
						 onclick="return confirmar_exclusao('<?php echo $linha->descricao_calendario; ?>')">Excluir</a>
				</td>
			</tr>

			<?php

				}
            ?>
            
</tbody>
</table>
	</div>
	</div>
	
</div>