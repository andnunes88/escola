<?php include"menu.php";?>
<div class="base-direito">
	<h1 class="titulo"><i class="icone cad"></i>CADASTRO DE ANO LETIVO</h1>
<div class="base-form">
	<form action="" method="post">
		<label>
        <div class="col6">
        <span>Descrição</span>
            <input type="text" name="txt_descricao" id="txt_descricao" value="">
        </div>

        <div class="col6">
             <span>Qtde Turmas</span>
             <input type="text" name="txt_qtde_turmas" id="txt_qtde_turmas" value="">
        </div>
		</label>
		<label>
        <div class="col6">
                <span>Início Matrículo</span>
                <input type="text" name="txt_inicio_matricula" id="txt_inicio_matricula" value="">
        </div>

        <div class="col6">
                <span>Fim Matrícula</span>
                <input type="text" name="txt_fim_matricula" id="txt_fim_matricula" value="">
        </div>
		</label>
		
		<label>		
        <div class="col6">
                <span>Início do Ano Letivo</span>
                <input type="text" name="txt_inicio_ano_letivo" id="txt_inicio_ano_letivo" value="">
        </div>

        <div class="col6">
                <span>Fim do Ano Letivo</span>
                <input type="text" name="txt_fim_ano_letivo" id="txt_fim_ano_letivo" value="">
        </div>
		</label>
		<label>
        <div class="col6">
                <span>Início primeiro Semestre</span>
                <input type="text" name="txt_inicio_primeiro_bimestre" id="txt_inicio_primeiro_bimestre" value="">
        </div>

        <div class="col6">
                <span>Fim primeiro Semestre</span>
                <input type="text" name="txt_fim_primeiro_bimestre" id="txt_fim_primeiro_bimestre" value="">
        </div>
		</label>
		
		<label>
        <div class="col6">
                <span>Início segundo Semestre</span>
                <input type="text" name="txt_inicio_segundo_bimestre" id="txt_inicio_segundo_bimestre" value="">
        </div>

        <div class="col6">
                <span>Fim segundo Semestre</span>
                <input type="text" name="txt_fim_segundo_bimestre" id="txt_fim_segundo_bimestre" value="">
        </div>
		</label>
		
		<label>
        <div class="col6">
                <span>Início terceiro Semestre</span>
                <input type="text" name="txt_inicio_terceiro_bimestre" id="txt_inicio_terceiro_bimestre" value="">
        </div>

        <div class="col6">
                <span>Fim terceiro Semestre</span>
                <input type="text" name="txt_fim_terceiro_bimestre" id="txt_fim_terceiro_bimestre" value="">
        </div>
		</label>
		<label>
        <div class="col6">
                <span>Início quarto Semestre</span>
                <input type="text" name="txt_inicio_quarto_bimestre" id="txt_inicio_quarto_bimestre" value="">
        </div>

        <div class="col6">
                <span>Fim quarto Semestre</span>
                <input type="text" name="txt_fim_quarto_bimestre" id="txt_fim_quarto_bimestre" value="">
        </div>
		</label>
	
           <input type="hidden" name="txt_id_ano_letivo" value="">					

           <input type="submit" name="logar" id="logar" value="Salvar" class="but salvar">					
   
        </form>
	</div>
</div>