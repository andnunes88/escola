<script >
	function confirmar_exclusao(dado){
		if(!confirm("Tem certeza que deseja excluir o registro: " + dado + " ?")){
			return false;
		}
		return true;
	}
</script>

<?php include"menu.php";?>

<div class="base-direito">
<div class="base-lista">
<h1 class="titulo"><i class="icone confirma"></i>Turma</h1>	
	<div class="backform">
	<div class="base-form">

		<form action="" name="">
			
				<span>BUSCAR DE turma</span>
				<div  class="row">
				<div class="col6">
					<input type="text" name="" value="">
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
	<h2 class="titulo"><i class="icone lista"></i>lista de turma</h2>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<thead>
		<tr> 
			<th align="center">ID</th>
			<th align="left">Turma</th> 
			<th align="center">Turno</th> 
			<th align="center">Série</th> 
			<th colspan="2" align="center">Ação</th>
		  
		</tr>
		</thead>
		<tbody>

			<?php 
				foreach ($lista as $linha) {
			?>		

            <tr> 			
				<td align="center" class="coluna1"> <?php echo $linha->id_turma?></td>
                <td align="left" class="coluna1"> <?php echo $linha->turma?></td>
                <td align="center" class="coluna1">	<?php echo $linha->id_sala?></td>
                <td align="center" class="coluna1">	<?php echo $linha->id_serie?></td>
				<td align="center" class="coluna1">
					<a href="<?php echo base_url() . "/turma/editar/" . $linha->id_turma ?>" class="but editar">Editar</a>
					<a href="<?php echo base_url() . "/turma/excluir/" . $linha->id_turma ?>" class="but excluir"
						 onclick="return confirmar_exclusao('<?php echo $linha->turma; ?>')">Excluir</a>
				</td>
						 
			</tr>

			<?php } ?>
           
		</tbody>
		</table>
	</div>
	</div>
	
</div>