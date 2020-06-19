<?php
	class Tarefas_model extends CI_Model 
	{
		public function listar_tarefas($pag = null, $passo = 25)
		{
			if(is_null($pag)) {
				$this->db->select('tarefas.*, responsavel.nome as responsavel_nome, categoria.categoria as categoria_nome');
				$this->db->from('tarefas');
				$this->db->join('responsavel', 'responsavel.id_responsavel = tarefas.responsavel', 'left');
				$this->db->join('categoria', 'categoria.id_categoria = tarefas.categoria', 'left');
				$this->db->order_by('tarefas.finalizacao', 'desc');
				return $this->db->get()->result_array();

			}
			else {
				$pag--;
				$inicio = $pag * $passo;

				$this->db->select('tarefas.*, responsavel.nome as responsavel_nome, categoria.categoria as categoria_nome');
				$this->db->from('tarefas');
				$this->db->join('responsavel', 'responsavel.id_responsavel = tarefas.responsavel', 'left');
				$this->db->join('categoria', 'categoria.id_categoria = tarefas.categoria', 'left');
				$this->db->order_by('tarefas.finalizacao', 'desc');
				$this->db->limit($passo, $inicio);
				return $this->db->get()->result_array();
			}
 		}

 		public function num_listar_tarefas()
		{
			return $this->db->count_all("tarefas");
 		}
	}