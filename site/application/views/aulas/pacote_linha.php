<tr class="aula-linha remove-from-download">
	<td>
		<select class="form-control quantidade aula-select remove-from-download">
			<?php for($i=1;$i<=60;$i++):?>
				<option value="<?=$i?>"><?=$i?></option>
			<?php endfor;?>
		</select>
	</td>
	<td>
		<div class="remove-from-download">R$ <span class="total">60</span>,00</div>
	</td>
	<td class="acao remove-from-download">
		<button class="btn btn-success gravar">
			<i class="fa fa-check-circle"> CLIQUE AQUI para aplicar o desconto</i>
		</button>
		<button style="display:none" class="btn btn-default alterar">
			<i class="fa fa-pencil"> Alterar</i>
		</button>
			<!--
		<button class="btn btn-danger excluir">
			<i class="fa fa-close"> Excluir</i>
		</button>
		-->
	</td>
</tr>
