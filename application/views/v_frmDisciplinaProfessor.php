<?php include"menu.php";?>
<div class="base-direito">
	<div class="base-lista">
	<h1 class="titulo"><i class="icone cad"></i>CADASTRO DISCIPLINA PROFESSOR</h1>
	<div class="backform">
	<div class="base-form">
		<form action="<?php echo base_url() ?>professor/inserirDisciplinaProfessor"" method="post">		
			<div  class="row">		
				<div class="col6">
					<span>BUSCAR DE Professor</span>
					<select name="txt_id_professor">
						<option value="">Selecione o Professor</option>
						<?php 
							foreach ($professores as $professor) {
								
								$valor = $professor->id_professor;
								echo "<option value='$valor'>$professor->nome_professor</option>";
						 }	?>
					</select>	
				</div>
				<div class="col4">
					<span>Disciplina</span>
					<select name="txt_id_disciplina">
						<?php 
							foreach ($disciplinas as $disciplina) {
								
								$valor = $disciplina->id_disciplina;
								echo "<option value='$valor'>$disciplina->disciplina</option>";
						 }	?>
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
	
		
<div class="caixa-lista">
	<h2 class="titulo"><i class="icone lista"></i>LISTA DE DISCIPLINAS</h2>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<thead>
		<tr> 
			<th align="center">ID</th>
			<th align="left" width="70%">Disciplina</th> 
			<th colspan="2" align="center">Ação</th>
		  
		</tr>
		</thead>
		<tbody>
			<?php
				foreach ($lista as $linha) {
				?>				
            <tr> 			
				<td align="center" class="coluna1"><?php echo $linha->id_disciplina ?></td>
                <td align="left" class="coluna1"><?php echo $linha->disciplina ?></td>
				<td align="center" class="coluna1">
					<a href="<?php echo base_url() . "/disciplina/editar/" . $linha->id_disciplina ?>" class="but editar">Editar</a>
				</td>
				<td align="center" class="coluna1">
					<a href="<?php echo base_url() . "/disciplina/excluir/" . $linha->id_disciplina ?>" class="but excluir"
						 onclick="return confirmar_exclusao('<?php echo $linha->disciplina; ?>')">Excluir</a>	
				</td>

			</tr>

			<?php	} 	 ?>
		</tbody>
		</table>
	</div>

</div>
</div>