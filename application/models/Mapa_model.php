<?php

class Mapa_model extends CI_Model
{
 public $lat;
 public $long;

	public function get_info(){

		$query = $this->db->get('markers',10);
		return $query->result();
	}


}
