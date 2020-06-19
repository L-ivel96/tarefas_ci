<?php
	class Categoria_model extends CI_Model 
	{
		public function salva($produto)
		{
			return $this->db->insert("categoria", $produto);
 		}
	}