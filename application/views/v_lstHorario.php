
<script >
	function confirmar_exclusao(dado){
		if(!confirm("Tem certeza que deseja excluir o registro: " + dado + " ?")){
			return false;
		}
		return true;
	}
</script>

<?php include"menu.php"; ?>

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
    	
    	<?php 
    		foreach ($lista as $linha) {
    			?>    		      
	
            <tr> 			
				<td align="center" class="coluna1"><?php echo $linha->id_horario?></td>
                <td align="left" class="coluna1"><?php echo $linha->horario?></td>
                <td align="center" class="coluna1"><?php echo $linha->turno?></td>
                <td align="center" class="coluna1"><?php echo $linha->inicio?></td>
                <td align="center" class="coluna1"><?php echo $linha->fim?></td>
				<td align="center" class="coluna1">
					<a href="<?php echo base_url() . "/horario/editar/" . $linha->id_horario ?>" class="but editar">Editar</a>
					<a href="<?php echo base_url() . "/horario/excluir/" . $linha->id_horario ?>" class="but excluir"
						onclick="return confirmar_exclusao('<?php echo $linha->horario; ?>')">Excluir</a>	
				</td>
							 
			</tr>

		<?php }   	?>  
            
		</tbody>
		</table>
	</div>
	</div>
	
</div>