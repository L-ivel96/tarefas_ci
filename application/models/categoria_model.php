<?php
	class Categoria_model extends CI_Model 
	{
		public function salva($produto)
		{
			return $this->db->insert("categoria", $produto);
 		}

 		public function listar()
		{
			$this->db->from('categoria');
			$this->db->order_by('categoria', 'asc');
			return $this->db->get()->result_array();
		}

	}