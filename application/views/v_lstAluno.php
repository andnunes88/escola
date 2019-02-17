
<?php include"menu.php";?>

<div class="base-direito">
<div class="base-lista">
<h1 class="titulo"><i class="icone confirma"></i>Aluno</h1>	
	<div class="backform">
	<div class="base-form">

		<form action="" name="">
			
				<span>BUSCAR DE aluno</span>
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
	<h2 class="titulo"><i class="icone lista"></i>lista de aluno</h2>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<thead>
		<tr> 
			<th align="center">ID</th>
			<th align="left">aluno</th> 
			<th align="center">Email</th> 
			<th align="center">fone</th> 
			<th colspan="2" align="center">Ação</th>
		  
		</tr>
		</thead>
		<tbody>
			<?php
				
				foreach ($lista as $linha) 					
					
				{ ?>
					
	            <tr> 			
					<td align="center" class="coluna1">1</td>
	                <td align="left" class="">	<?php echo $linha->nome_aluno; ?></td>
	                <td align="center" class="">	<?php echo $linha->email_aluno; ?></td>
	                <td align="center" class="">	<?php echo $linha->fone_aluno; ?></td>
					<td align="center" class="">
						<a href="" class="but editar">Editar</a>
						<a href="" class="but excluir">Excluir</a>
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