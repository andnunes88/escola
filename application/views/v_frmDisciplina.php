<?php 

$id_disciplina = isset ($disciplina->id_disciplina) ? $disciplina->id_disciplina : '';
$disciplina = isset ($disciplina->disciplina) ? $disciplina->disciplina : '';
$obj_estudo   = isset ($disciplina->objetivo) ? $disciplina->objetivo : '';
$metodologia = isset ($disciplina->metodologia) ? $disciplina->metodologia : '';
$bibliografia = isset ($disciplina->bibliografia) ? $disciplina->bibliografia : '';

include"menu.php";
?>

<div class="base-direito">
	<h1 class="titulo"><i class="icone cad"></i>CADASTRO DE disciplina</h1>
  <div class="base-form">
   <form action="<?php echo base_url() ?>disciplina/salvar" method="post">
    <label>

      <span>Disciplina</span>
      <input type="text" name="txt_disciplina" id="" value="<?php echo $disciplina ?>">
    </label>
    <label>
     <span>Objeto de Estudo</span>
     <textarea rows="10" name="txt_obj_estudo"> <?php echo $obj_estudo; ?> </textarea>
   </label>
   <label>
     <span>Metodologia</span>
     <textarea rows="10" name="txt_metodologia"><?php echo $metodologia ?></textarea>
   </label>
   <label>
     <span>Bibliografia</span>
     <textarea rows="10" name="txt_bibliografia"><?php echo $bibliografia ?></textarea>
   </label>

   <input type="hidden" name="txt_id_disciplina" value="<?php echo $id_disciplina ?>">					

   <input type="submit" value="Salvar" class="but salvar">					
   
 </form>
</div>
</div>