<?php 

$id_horario = isset ($horario->id_horario) ? $horario->id_horario : '';
$horario = isset ($horario->horario) ? $horario->horario : '';
$turno = isset ($horario->turno) ? $horario->turno : '';
$inicio = isset ($horario->inicio) ? $horario->inicio : '';
$fim = isset ($horario->fim) ? $horario->fim : '';

include"menu.php";

?>
<div class="base-direito">
	<h1 class="titulo"><i class="icone cad"></i>CADASTRO DE HORÁRIO</h1>
<div class="base-form">
	<form action="<?php echo base_url() ?>/horario/salvar" method="post">
		<label>      
			<div  class="col6">	
				<span>Horário</span>
				<input type="text" name="txt_horario" id="txt_horario" value="<?php echo $horario ?>">
			</div>  
			<div class="col6">
				<span>Turno</span>
				<select name="txt_turno">
                     <option value="Matutino"> Matutino </option>
                     <option value="Vespertino"> Vespertino </option>
                     <option value="Noturno"> Noturno </option>                        
                </select>
			</div>
       </label>
	   
		<label>      
			<div  class="col6">	
				<span>Início</span>
				<input type="text" name="txt_inicio" id="txt_inicio" value="<?php echo $inicio ?>">
			</div>  
			<div class="col6">
				<span>Fim</span>
				<input type="text" name="txt_fim" id="txt_fim" value="<?php echo $fim ?>">
			</div>
       </label>
	  	
           <input type="hidden" name="txt_id_horario" value="<?php echo $id_horario ?>">					

           <input type="submit" name="logar" id="logar" value="Salvar" class="but salvar">					
   
        </form>
	</div>
</div>