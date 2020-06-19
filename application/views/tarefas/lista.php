<div class="table-responsive">          
	<table id="produtos" class="table table-striped">
		<thead>
			<tr>
				<th>Responsável</th>
				<th>Descrição</th>
				<th>Categoria</th>
				<th>Data Finalização</th>
				<th>Criada</th>
				<th>Atalizada</th>
				<th>Editar</th>
				<th>excluir</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($dados_tarefas as $tarefa) : ?>
				<?php
					$finalizacao_format = empty($tarefa['finalizacao']) ? '' : new \DateTime($tarefa['finalizacao']);

					$criado_em_format = empty($tarefa['criado_em']) ? '' : new \DateTime($tarefa['criado_em']);

					$atualizado_em_format = empty($tarefa['atualizado_em']) ? '' : new \DateTime($tarefa['atualizado_em']);
				?>
				<tr id="<?= $tarefa['id_tarefa']; ?>">
					<td><?= $tarefa['responsavel_nome'] ?></td>
					<td><?= $tarefa['descricao'] ?></td>
					<td><?= $tarefa['categoria_nome'] ?></td>
					<td>
						<?= empty($tarefa['finalizacao']) ? '' : $finalizacao_format->format('Y-m-d H:i:s'); ?>		
					</td>
					<td>
						<?= empty($tarefa['criado_em']) ? '' : $criado_em_format->format('Y-m-d H:i:s'); ?>
					</td>
					<td>
						<?= empty($tarefa['atualizado_em']) ? '' : $atualizado_em_format->format('Y-m-d H:i:s'); ?>
						
					</td>
					<?php $link_edicao = "/tarefa/editar/".$tarefa['id_tarefa']; ?>
					<td><a href="<?= site_url($link_edicao); ?>" class="btn btn-warning">Editar</a></td>
					<td><button class="btn btn-danger" onclick="excluir_linha(this)">Excluir</button></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="8"><a href="<?= site_url('/tarefa/editar/'); ?>" class="btn btn-primary">Adicionar Tarefa</a></td>
			</tr>
		</tfoot>
	</table>
</div>

<script type="text/javascript">
	function excluir_linha(btn)
	{
		var conf = confirm("Deseja realmente deletar este registro?");
		if (conf == true) 
		{
			var linha = $(btn).parent().parent();
			
			url_exc = "<?= base_url().'index.php/tarefa/excluir' ?>";

			//faz req ajax
			$.ajax({
				url: url_exc,
				type: 'POST',
				dataType: 'json',
				data: { id_tarefa: linha.attr("id") }
			})
			.done(function(dados) {
				if(dados["op"]) {
					linha.remove();	
				}
				else {
					alert("Id do registro não localizado");
				}
			})
			.fail(function(e) {
				alert("Erro ao realizar a exclusão");
			})
			
		} 

	};


</script>


