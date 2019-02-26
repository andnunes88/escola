<?php 

$id_turma = isset ($turma->id_turma) ? $turma->id_turma : '';
$turma   = isset ($turma->turma) ? $turma->turma : '';
$serie = isset ($turma->id_serie) ? $turma->id_serie : '';
$turno = isset ($turma->turno) ? $turma->turno : '';
$sala = isset ($turma->id_sala) ? $turma->id_sala : '';
$data_turma = isset ($turma->data_cadastro) ? $turma->data_cadastro : '';

include"menu.php";

?>

<div class="base-direito">
	<h1 class="titulo"><i class="icone cad"></i>Cadastro de Turma</h1>
  <div class="base-form">
   <form action="<?php echo base_url() ?>turma/salvar" method="post">

    <label>
      <div class="col12">
        <span>Nome da turma</span>
        <input type="text" name="txt_turma" id="txt_turma" value="<?php echo $turma ?>">
      </div>
    
    </label>

     <label>
      <div class="col6">
        <span>Serie</span>
        <input type="text" name="txt_serie" id="txt_serie" value="<?php echo $serie ?>">
      </div>

      <div class="col6">
        <span>Turno</span>
        <input type="text" name="txt_turno" id="txt_turno" value="<?php echo $turno ?>">
      </div>
  
      </label>

      <label>

      <div class="col6">
        <span>Sala</span>
          <input type="text" name="txt_sala" id="txt_sala" value="<?php echo $sala ?>">
      </div>

      <div class="col6">
        <span>Data</span>
         <input type="date" name="txt_data" id="txt_data" value="<?php echo $data_turma ?>">
      </div>
    </label>

   <input type="hidden" name="txt_id_turma" value="<?php echo $id_turma ?>">					

   <input type="submit" value="Salvar" class="but salvar">					
   
 </form>
</div>
</div>