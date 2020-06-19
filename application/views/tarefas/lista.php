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
				<tr>
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
					<td>EDITAR</td>
					<td>EXCLUIR</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
