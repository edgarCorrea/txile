<?php

class Arquivos_model extends CI_Model
{



	public function insert($tabela = null, $data = null, $get_last_id = null)
	{
		if ($tabela && is_array($data))
		{

			$this->db->insert($tabela, $data);

			if ($get_last_id)
			{
				$this->session->set_userdata('last_id', $this->db->insert_id());
			}

			if ($this->db->affected_rows() > 0)
			{
				$this->session->set_flashdata('Sucesso', 'Dados salvo com sucesso');
			}
			else
			{
				$this->session->set_flashdata('error', 'Erro ao salvar os dados');
			}
		}
		else
		{

		}
	}
}
