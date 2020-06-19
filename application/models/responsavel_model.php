<?php
	class Responsavel_model extends CI_Model 
	{
		public function salva($produto)
		{
			return $this->db->insert("responsavel", $produto);
 		}
	}