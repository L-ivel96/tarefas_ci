<?php
	class Responsavel_model extends CI_Model 
	{
		public function salva($responsanvel)
		{
			return $this->db->insert("responsavel", $responsanvel);
 		}

 		public function listar()
		{
			$this->db->from('responsavel');
			$this->db->order_by('nome', 'asc');
			return $this->db->get()->result_array();
		}
	}