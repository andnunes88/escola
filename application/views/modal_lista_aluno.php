<div class="window" id="janela1">
    <div class="caixa">
        <a href="" class="fechar"><b>X</b></a>
        <div class="base-lista">
            <div class="backform">
				<div class="base-form">
					<form action="" name="">		
						<div  class="row">		
							<div class="col9">
								<span>Digite o nome do aluno</span>
								 <input type="text" id="termodabusca" name="termodabusca" value="<?php //echo $termodabusca; ?>">
									<input type="hidden" name="pesq" value="ok">
							</div>
							<div class="col3">
								<span>&nbsp;</span>
								  <input type="button" name="Submit" value="Pesquisar" class="but" onclick="buscarAluno()">
							</div>
						</div>	
					</form>
				</div>
			</div>
			
			<div class="caixa-lista">
			<h2 class="titulo"><i class="icone confirma"></i>Aluno selecionado</h2>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
                <thead>
					<tr> 
					  <th width="34" align="center">ID</th>
					  <th width="50%" align="center">Aluno</th>
					  <th width="30%" align="center">Email</th>
					  <th width="58" align="center">Ação</th>
					  
					</tr>
				</thead>
				<tbody id="listaBuscaAluno">
				<tr>
					<td class="coluna1"> 44</td>
					<td class="coluna1"> AFONSO JOSE DE SOUSA SANTANA 	</td>
					<td class="coluna1"> Email@.com</td>
					<td class="coluna1"><a href="javascript:;" onclick="inserirAlunoNaTurma(44)" class="but editar">Inserir na Turma</a></td>
				</tr>
				</tbody>
			</table>
			</div>
			
		</div>
    </div>
  </div>

<!-- mascara para cobrir o site -->  
<div id="mascara"></div>